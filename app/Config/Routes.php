<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/welcome', 'Home::index');
$routes->get('/url-shortener', 'URLController::urlShortener');
