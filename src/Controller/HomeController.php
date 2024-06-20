<?php

namespace App\Controller;

use App\Form\ReservationType;
use App\Entity\Reservation;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class HomeController extends AbstractController
{
    #[Route('/home', name: 'app_home')]
    public function index(): Response
    {
        return $this->render('index.html.twig');
    }

    #[Route('/reserve', name: 'app_reserve')]
    public function reserve(Request $request, EntityManagerInterface $entityManager): Response
    {
        // Odbaci pristup ako korisnik nije ulogovan
        $this->denyAccessUnlessGranted('ROLE_USER');
        
        // Kreiranje nove rezervacije
        $reservation = new Reservation();
    
        // Dohvati trenutno ulogovanog korisnika i postavi ga za rezervaciju
        $user = $this->getUser();
        if (!$user) {
            // Opcionalno: Dodaj poruku o grešci ako korisnik nije pronađen ili nije ulogovan
            $this->addFlash('error', 'You must be logged in to make a reservation.');
            return $this->redirectToRoute('login_route'); // Preusmeri na stranicu za prijavu
        }
        $reservation->setUser($user); // Postavi korisnika za rezervaciju
    
        // Proveri da li postoji 'date' query parametar i postavi ga
        $dateParam = $request->query->get('date');
        if ($dateParam) {
            try {
                $date = new \DateTime($dateParam);
                $reservation->setDate($date); // Pretpostavimo da postoji setDate metoda
            } catch (\Exception $e) {
                // U slučaju nevalidnog formata datuma, dodaj logiku za grešku
                $this->addFlash('error', 'Invalid date format.');
                return $this->redirectToRoute('app_reserve'); // Vrati korisnika nazad na formu za rezervaciju
            }
        }
    
        $form = $this->createForm(ReservationType::class, $reservation);
    
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($reservation);
            $entityManager->flush();
    
            $this->addFlash('success', 'Your reservation has been successfully submitted.');
            
            return $this->redirectToRoute('app_home'); // Preusmeri korisnika na početnu stranicu
        }
    
        return $this->render('reservation/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }
    


    #[Route('/reservation/calendar', name: 'app_calendar')]
    public function calendar(): Response
{
    $this->denyAccessUnlessGranted('ROLE_USER');
    return $this->render('reservation/calendar.html.twig');
}

    #[Route('/my-reservations', name: 'app_my_reservations')]
    public function myReservations(EntityManagerInterface $entityManager): Response
{
    $user = $this->getUser();
    if (!$user) {
        return $this->redirectToRoute('login_route');  // Preusmeri na login ako korisnik nije ulogovan
    }

    $reservations = $entityManager->getRepository(Reservation::class)->findBy(['user' => $user]);

    return $this->render('reservation/my_reservations.html.twig', [
        'reservations' => $reservations,
    ]);
}
    
}
