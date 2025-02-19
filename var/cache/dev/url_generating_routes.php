<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    'app_home' => [[], ['_controller' => 'App\\Controller\\HomeController::index'], [], [['text', '/home']], [], [], []],
    'app_reserve' => [[], ['_controller' => 'App\\Controller\\HomeController::reserve'], [], [['text', '/reserve']], [], [], []],
    'app_calendar' => [[], ['_controller' => 'App\\Controller\\HomeController::calendar'], [], [['text', '/reservation/calendar']], [], [], []],
    'app_my_reservations' => [[], ['_controller' => 'App\\Controller\\HomeController::myReservations'], [], [['text', '/my-reservations']], [], [], []],
    'app_register' => [[], ['_controller' => 'App\\Controller\\RegistrationController::register'], [], [['text', '/register']], [], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], [], []],
    'app_settings' => [[], ['_controller' => 'App\\Controller\\SettingsController::index'], [], [['text', '/settings']], [], [], []],
    'app_logout' => [[], ['_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController::templateAction'], [], [['text', '/logout']], [], [], []],
    'app_reservation_calendar' => [[], ['_controller' => 'App\\Controller\\HomeController::calendar'], [], [['text', '/reservation/calendar']], [], [], []],
    'App\Controller\HomeController::index' => [[], ['_controller' => 'App\\Controller\\HomeController::index'], [], [['text', '/home']], [], [], []],
    'App\Controller\HomeController::reserve' => [[], ['_controller' => 'App\\Controller\\HomeController::reserve'], [], [['text', '/reserve']], [], [], []],
    'App\Controller\HomeController::calendar' => [[], ['_controller' => 'App\\Controller\\HomeController::calendar'], [], [['text', '/reservation/calendar']], [], [], []],
    'App\Controller\HomeController::myReservations' => [[], ['_controller' => 'App\\Controller\\HomeController::myReservations'], [], [['text', '/my-reservations']], [], [], []],
    'App\Controller\RegistrationController::register' => [[], ['_controller' => 'App\\Controller\\RegistrationController::register'], [], [['text', '/register']], [], [], []],
    'App\Controller\SecurityController::login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], [], []],
    'App\Controller\SecurityController::logout' => [[], ['_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController::templateAction'], [], [['text', '/logout']], [], [], []],
    'App\Controller\SettingsController::index' => [[], ['_controller' => 'App\\Controller\\SettingsController::index'], [], [['text', '/settings']], [], [], []],
];
