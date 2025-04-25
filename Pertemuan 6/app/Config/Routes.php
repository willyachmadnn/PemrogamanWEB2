<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'MataKuliah::index');
$routes->get('/MJK', 'Matkul::MJK');
$routes->get('/PEMWEB', 'Matkul::PEMWEB');
$routes->get('/VSI', 'Matkul::VSI');
$routes->get('/RPL', 'Matkul::RPL');
$routes->get('/mata_kuliah/details/(:segment)', 'MataKuliah::details/$1');