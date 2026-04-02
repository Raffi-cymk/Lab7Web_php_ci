<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */



$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Artikel');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();

// PENTING
$routes->setAutoRoute(true);

// ROUTE UTAMA
$routes->get('/', 'Artikel::index');
$routes->get('artikel', 'Artikel::index');
$routes->get('artikel/detail/(:segment)', 'Artikel::detail/$1');
$routes->get('artikel/admin', 'Artikel::admin');
$routes->get('artikel/tambah', 'Artikel::tambah');
$routes->match(['get','post'], 'artikel/simpan', 'Artikel::simpan');
$routes->get('artikel/edit/(:num)', 'Artikel::edit/$1');
$routes->post('artikel/update/(:num)', 'Artikel::update/$1');
$routes->get('artikel/hapus/(:num)', 'Artikel::hapus/$1');