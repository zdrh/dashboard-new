<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('prihlaseni', 'Login::login');
$routes->post('login-complete', 'Login::loginComplete');
$routes->get('registrace', 'Login::register');
$routes->get('register-complete', 'Login::registerComplete');
$routes->get('pridat-kategorii', 'Kategorie::add');
$routes->post('pridat-kategorii-complete', 'Kategorie::create');

$routes->group('administrace', ['filter' => 'auth'] , static function ($routes){
    $routes->get('dashboard', 'Dashboard::index');
    $routes->get('odhlaseni', 'Dashboard::logout');
    $routes->get('profil/edit', 'Profile::edit');
    $routes->put('profil/edit/complete', 'Profile::editComplete');
    $routes->post('email/validate', 'Profile::emailValidate');
    $routes->get('profil/heslo/edit', 'Profile::editPassword');
    
});
