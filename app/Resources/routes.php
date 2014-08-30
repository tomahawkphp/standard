<?php

use Tomahawk\Routing\Router;
use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

$router = new Router();
$router->setRoutes(new RouteCollection());

$router->get('/', 'home', 'Acme\\Controller\\HomeController::homeAction');

return $router->getRoutes();