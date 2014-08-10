<?php

use Tomahawk\HttpKernel\Kernel;

class AppKernel extends Kernel
{

    public function registerBundles()
    {
        $bundles = array(
            new \Tomahawk\Bundle\FrameworkBundle\FrameworkBundle(),
            new \Tomahawk\Bundle\GeneratorBundle\GeneratorBundle(),
            new \Acme\AcmeBundle()
        );

        return $bundles;
    }

    public function registerMiddleware()
    {
        return array(
            new \Tomahawk\HttpCore\Middleware\Response(),
            new \Tomahawk\Session\Middleware\Session()
        );
    }
}