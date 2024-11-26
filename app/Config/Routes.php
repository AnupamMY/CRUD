<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Login::login');
$routes->get('/home','Home::index');
$routes->post('/saveUser', 'Home::saveUser');
$routes->get('/getSingleUser/(:num)', 'Home::getSingleUser/$1');
$routes->post('/updateUser', 'Home::updateUser');
$routes->post('/deleteUser', 'Home::deleteUser');
$routes->post('/deleteAllUser', 'Home::deleteAllUser');
$routes->post('/create', 'Home::deleteAllUser');


$routes->get('/register', "Register::index");
$routes->post('/registerUser',"Register::register");
$routes->get('/',"Home::logout");
// $routes->get('/login', "Login::login");


$routes->post('/loginUser',"Login::loginUser");