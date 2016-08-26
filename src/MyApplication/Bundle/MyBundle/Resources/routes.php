<?php

$router = new Tomahawk\Routing\Router();

$router->get('/', 'home', 'MyBundle:Home:welcome');
$router->get('/form', 'form', 'MyBundle:Home:form');
$router->post('/form', 'form.post', 'MyBundle:Home:form');

// The above router can also be defined as
//$router->get('/', 'home', 'MyApplication\\Bundle\\MyBundle\\Controller\\HomeController::welcomeAction');

// If you have the controller in the service container you can also do the following
//$router->get('/', 'home', 'home_controller:welcomeAction');

return $router->getRoutes();