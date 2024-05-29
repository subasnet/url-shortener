<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/welcome', 'Home::index');

$routes->match(['get','post'],'url-shortener', 'URLController::urlShortener');

// Handle short URLs
$routes->get("/(:segment)", "URLController::handleShortURLs/$1");
