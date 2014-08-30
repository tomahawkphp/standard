<?php

return array(

    /*
     * Cache Drivers
     *
     * Supported:
     *      array
     *      database
     *      filesystem
     *
     */
    'driver' => 'array',

    /*
     * Namespace - Used with doctrine cache
     */
    'namespace' => 'tomahawk_cache:',

    /*
     * Enable Cache
     */
    'enabled' => true,


    /*
     * Filesystem
     */
    'directory'        => __DIR__ .'/../storage/cache',
);