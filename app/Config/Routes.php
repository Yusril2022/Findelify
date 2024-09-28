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
$routes->get('/userReport', 'Pages::user');
$routes->get('/grupReport', 'Pages::grup');
$routes->get('/talkReport', 'Pages::talk');
$routes->get('/chatReport', 'Pages::chat');
$routes->get('/manageAccount', 'Pages::manage');


