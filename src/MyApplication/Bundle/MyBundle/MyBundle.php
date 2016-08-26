<?php

namespace MyApplication\Bundle\MyBundle;

use Tomahawk\HttpKernel\Bundle\Bundle;

class MyBundle extends Bundle
{
    public function getRoutePath()
    {
        return __DIR__ . '/Resources/routes.php';
    }
}
