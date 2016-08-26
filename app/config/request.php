<?php

return [

    /*
     * Used by the URL Generator via the RequestContext class
     */
    'base_url' => '',

    /*
     *
     */
    'host' => 'example.com',

    'scheme' => 'http',

    'http_port'  => 80,

    'https_port' => 443,

    /**
     * This option should only be used if you can't setup an SSL certificate locally
     */
    'ssl' => true, //Used when generating URLs to override https
];
