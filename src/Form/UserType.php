<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Image;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Form\FormInterface;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('email', EmailType::class, [
                'attr' => ['class' => 'form-control'],
                'label_attr' => ['class' => 'form-label']
            ])
            ->add('password', PasswordType::class, [
                'required' => false,
                'mapped' => false,
                'attr' => ['autocomplete' => 'new-password', 'class' => 'form-control'],
                'label' => 'New Password (leave blank if you do not want to change it)',
                'constraints' => [
                    new NotBlank([
                        'message' => 'Please enter a password',
                        'groups' => ['password_change']
                    ])
                ],
                'help' => 'Leave blank if you do not wish to change your password.'
            ])
            ->add('profilePicture', FileType::class, [
                'label' => 'Profile Picture',
                'mapped' => false,
                'required' => false,
                'attr' => ['class' => 'form-control-file'],
                'constraints' => [
                    new Image([
                        'maxSize' => '5M',
                        'maxSizeMessage' => 'The maximum allowed file size is 5MB.',
                        'mimeTypesMessage' => 'Please upload a valid image file.'
                    ])
                ],
                'help' => 'Leave blank to keep the current image.'
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
            'validation_groups' => function (FormInterface $form) {  // Pravilno koristi FormInterface
                $password = $form->get('password')->getData();
                if (!empty($password)) {
                    return ['Default', 'password_change'];
                }
                return ['Default'];
            }
        ]);
    }
}
