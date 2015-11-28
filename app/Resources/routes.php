<?php

use Tomahawk\Routing\Router;

$router = new Router();

$router->get('/', 'home', 'MyPackage\\Controller\\HomeController::homeAction');

return $router->getRoutes();