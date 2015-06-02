<?php

use Tomahawk\Routing\Router;
use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

$router = new Router();
$router->setRoutes(new RouteCollection());

$router->get('foo', 'foo', function() {
    return 'Hello Foo';
});

return $router->getRoutes();