<?php

use Tomahawk\HttpKernel\Kernel;

class AppKernel extends Kernel
{
    /**
     * Register bundles
     *
     * @return array
     */
    public function registerBundles()
    {
        $bundles = [
            new \Tomahawk\Bundle\FrameworkBundle\FrameworkBundle(),
            new \Tomahawk\Bundle\MonologBundle\MonologBundle(),
            new \Tomahawk\Bundle\ErrorHandlerBundle\ErrorHandlerBundle(),
            new \Tomahawk\Bundle\GeneratorBundle\GeneratorBundle(),
            new \Tomahawk\Bundle\DoctrineBundle\DoctrineBundle(),
            new \Tomahawk\Bundle\SwiftmailerBundle\SwiftmailerBundle(),
            new \Tomahawk\Bundle\CSRFBundle\CSRFBundle(),
            new \MyApplication\Bundle\MyBundle\MyBundle(),
            new \TestApplication\Bundle\TestBundle\TestBundle(),
        ];

        if ('dev' === $this->getEnvironment()) {
            $bundles[] = new \Tomahawk\Bundle\WebProfilerBundle\WebProfilerBundle();
        }

        return $bundles;
    }

    /**
     * Return root directory
     *
     * @return string
     */
    public function getRootDir()
    {
        return __DIR__;
    }

    /**
     * Returns cache directory
     *
     * @return string
     */
    public function getCacheDir()
    {
        return dirname(__DIR__).'/var/cache';
    }

    /**
     * Return log directory
     *
     * @return string
     */
    public function getLogDir()
    {
        return dirname(__DIR__).'/var/log';
    }

}
