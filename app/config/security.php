<?php

return array(
    /*
     * Application Key
     */
    //'key'   => '___________ENTER_A_KEY__________',
    'key'   => 'fJ3PD12u6603aHmg0Ncuc3w1VI3AeiQI', //http://randomkeygen.com/

    /*
     * What handler to use for Auth
     *
     * eloquent, database or doctrine
     */
    'handler' => 'eloquent',

    // CSRF Token Name
    'csrf_token_name' => '_csrf_token',

    'handlers' => array(
        'doctrine' => array(
            'model' => 'MyPackage\Models\UserDoctrine',

            // Username field
            'username'   => 'username',

            // Password field
            'password'   => 'password',
        ),
        'database' => array(
            'table' => 'users',

            // Primary key field
            'key'   => 'id',

            // Username field
            'username'   => 'username',

            // Password field
            'password'   => 'password',

            // Connection to use
            'connection' => 'default',
        ),
        'eloquent' => array(
            'model' => 'MyPackage\Models\User',

            // Username field
            'username'   => 'username',

            // Password field
            'password'   => 'password',
        ),
    ),

);
