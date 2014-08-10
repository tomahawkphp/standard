<?php

use Tomahawk\HttpKernel\Kernel;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Matcher\UrlMatcher;
use Symfony\Component\HttpFoundation\Response;

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
}