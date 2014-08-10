<?php

return array(

    // array, database, cookie or filesystem
    'driver'           => 'array',

    'directory'        => __DIR__ .'/../storage/sessions',

    'session_name'     => 'tomahawk_session',
    'cookie_name'      => 'tomahawk_cookie',
    'cookie_lifetime'  => '',
    'cookie_path'      => '/',
    'cookie_domain'    => null,
    'cookie_secure'    => true,
    'cookie_http_only' => true,

    'session_table'    => 'tomahawk_sessions'

);