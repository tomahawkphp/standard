<?php

use Tomahawk\HttpKernel\Kernel;

class AppKernel extends Kernel
{
    public function registerBundles()
    {
        $bundles = array(
            new \Tomahawk\Bundle\FrameworkBundle\FrameworkBundle(),
            new \Tomahawk\Bundle\GeneratorBundle\GeneratorBundle(),
            new \Tomahawk\Bundle\MigrationsBundle\MigrationsBundle(),
            new \Tomahawk\Bundle\DoctrineBundle\DoctrineBundle(),
            new \Tomahawk\Bundle\SwiftmailerBundle\SwiftmailerBundle(),
            new \Tomahawk\Bundle\CSRFBundle\CSRFBundle(),
            new \MyPackage\Mybundle()
        );

        if ($this->getEnvironment() === 'dev') {
            $bundles[] = new \Tomahawk\Bundle\WebProfilerBundle\WebProfilerBundle();
        }

        return $bundles;
    }

    public function registerMiddleware()
    {
        $middlewares = array(
            // Converts string responses from controllers into responses
            new \Tomahawk\HttpCore\Middleware\StringResponse(),

            // Add newly created cookies to headers
            new \Tomahawk\HttpCore\Middleware\HeaderCookies(),

            // Saves the session at the end of the request
            new \Tomahawk\Session\Middleware\Session(),

            // Logs errors and outputs 404 and 50x error templates
            new \Tomahawk\HttpKernel\Middleware\ExceptionMiddleware(),
        );

        return $middlewares;
    }
}
