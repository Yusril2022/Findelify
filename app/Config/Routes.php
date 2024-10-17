<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Logreg::index');
$routes->get('/register', 'logreg::register');

$routes->post('auth/register', 'Auth::register');
$routes->post('auth/login', 'Auth::login');

$routes->get('/Pages', 'Pages::index');
$routes->get('/lostItem', 'Pages::user');
$routes->get('/foundItem', 'Pages::grup');
$routes->get('/manageAccount', 'Pages::manage');


