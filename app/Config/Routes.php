<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/test', 'Home::test');
$routes->get('/product', 'ProductController::test');
$routes->get('/create', 'ProductController::create');
$routes->get('/product/(:any)', 'ProductController::product/$1');
$routes->post('/save', 'ProductController::save');
$routes->get('/delete/(:any)', 'ProductController::delete/$1');
$routes->get('/edit/(:any)', 'ProductController::edit/$1');
$routes->get('/update/(:any)', 'ProductController::update/$1');
$routes->get('/productlist', 'ProductController::productlist');