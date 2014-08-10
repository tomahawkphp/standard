<?php

use Tomahawk\Routing\Router;
use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

$router = new Router();
$router->setRoutes(new RouteCollection());

$router->get('/', 'home', function() {

    $arr = array(
        'test' => 'bar'
    );

    array_set($arr, 'foo.bar', 'cheese');
    var_dump(array_get($arr, 'foo'));

    return new Response('Woot!');
});

$router->get('test', 'test', function() {
    return new Response('Woot!');
});

$router->get('acme', 'acme', 'Acme\\Controller\\HomeController::indexGet');


return $router->getRoutes();