<?php

error_reporting(-1);
ini_set('display_errors', 'On');

use Symfony\Component\HttpFoundation\Request;
use Whoops\Handler\PrettyPageHandler;
use Symfony\Component\Debug\Debug;

require_once __DIR__ . '/../app/autoload.php';
require_once __DIR__.'/../app/AppKernel.php';

$whoops = new \Whoops\Run;
$whoops->pushHandler(new PrettyPageHandler);
$whoops->register();

//Debug::enable();

$kernel = new AppKernel('prod', false);

$request = Request::createFromGlobals();
$response = $kernel->handle($request);
$response->send();

$kernel->terminate($request, $response);