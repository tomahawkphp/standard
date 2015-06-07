<?php

/*
 * Config for use with the Illuminate Database Component (Laravel)
 */
return array(

    'default' => 'default',

    // Whether to load Laravel services etc
    'enabled' => true,

    /*
     * Fetch Mode
     */
    'fetch'   => \PDO::FETCH_CLASS,

    /*
     * All Connections
     */
    'connections' => array(

        'default' => array(
            'driver'    => 'mysql',
            'host'      => 'localhost',
            'port'      => '3306',
            'database'  => 'test',
            'username'  => 'root',
            'password'  => '',
            'charset'   => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix'    => '',
        ),
        'laravel' => array(
            'driver'    => 'mysql',
            'host'      => 'localhost',
            'port'      => '3306',
            'database'  => 'laravel',
            'username'  => 'root',
            'password'  => '',
            'charset'   => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix'    => '',
        )
    )

);
