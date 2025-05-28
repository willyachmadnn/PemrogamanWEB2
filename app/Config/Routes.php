<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/about', 'Page::about');
$routes->get('/contact', 'Page::contact');
$routes->get('/faqs', 'Page::faqs');
$routes->get('/tos', 'Page::tos');
$routes->get('/biodata', 'Page::biodata');

$routes->get('/books/edit/(:segment)', 'Books::edit/$1');
$routes->post('/books/update/(:num)', 'Books::update/$1');

$routes->get('/books', 'Books::index');
$routes->get('/books/create', 'Books::create');
$routes->post('/books/save', 'Books::save');
$routes->get('/books/edit/(:segment)', 'Books::edit/$1');
$routes->post('/books/update/(:num)', 'Books::update/$1');
$routes->delete('/books/(:num)', 'Books::delete/$1');
$routes->get('/books/(:segment)', 'Books::detail/$1');