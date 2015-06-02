<?php

namespace MyPackage;

use MyPackage\CommandBus\UserCommandHandler;
use Tomahawk\HttpKernel\Bundle\Bundle;

class MyBundle extends Bundle
{
    /**
     * File path to load routes from
     *
     * /dir/to/routes.php
     *
     * @return mixed
     */
    public function getRoutePath()
    {
        return __DIR__ . '/Resources/routes.php';
    }
}