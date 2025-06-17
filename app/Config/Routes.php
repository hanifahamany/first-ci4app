<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
// $routes->get('coba', 'Coba::index');
// $routes->add('coba/test', 'Coba::test');
// $routes->get('/function', function () {
//     return 'This is a function route';
// });
$routes->setAutoRoute(True);