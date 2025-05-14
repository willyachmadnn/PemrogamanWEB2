<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/About', 'Page::about');
$routes->get('/Contact', 'Page::contact');
$routes->get('/Faqs', 'Page::faqs');
$routes->get('/Tos', 'Page::tos');
$routes->get('/Biodata', 'Page::biodata');
$routes->setAutoRoute(false);


$routes->get('/', 'Pages::index');
$routes->get('/books', 'Books::index');
$routes->get('/books/create', 'Books::create');
$routes->get('/books/edit(:segment)', 'Books::edit$1');
$routes->get('/books/save', 'Books::save');
$routes->get('/books', 'Books::index');
$routes->get('/books/(:segment)', 'Books::detail/$1');