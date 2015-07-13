<?php

defined('APP_PATH') || define('APP_PATH', realpath('.'));

return new \Phalcon\Config(array(
    'database' => array(
        'adapter'     => 'Mysql',
        'host'        => 'localhost',
        'username'    => 'thingPink',
        'password'    => 'thingPink',
        'dbname'      => 'thingPinkHash',
        'charset'     => 'utf8',
        ),
    'application' => array(
        'controllersDir' => APP_PATH . '/app/controllers/',
        'modelsDir'      => APP_PATH . '/app/models/',
        'formsDir'      => APP_PATH . '/app/forms/',
        'migrationsDir'  => APP_PATH . '/app/migrations/',
        'viewsDir'       => APP_PATH . '/app/views/',
        'pluginsDir'     => APP_PATH . '/app/plugins/',
        'libraryDir'     => APP_PATH . '/app/library/',
        'cacheDir'       => APP_PATH . '/app/cache/',
        'layoutsDir'     => APP_PATH . '/app/layouts/',
        'baseUri'        => '/thingPinkHash/'
        ),
    'facebook' => array(
        'appId' => '852892228133122',
        'appSecret' => '249966f550385b2ad969100d4876e805', 
        'redirectUrl' => 'http://thingpinkhash.localhost/Login/facebookLogin', 
        'default_graph_version' => 'v2.2', 
        'permissions' => array('email')
        ),
    'instagram' => array(
        'oauthUrl' => 'https://api.instagram.com/oauth/authorize/?client_id=CLIENT-ID&redirect_uri=REDIRECT-URI&response_type=code',
        'properties' => array(
            'CLIENT-ID' => '5625d48f316241a9b31ac4d65fd6c872',
            'clientSecret' => 'd6bc79426ad24b069da8449317b2b0d2',
            'websiteURL' => 'http://thingpinkhash.localhost',
            'REDIRECT-URI' => 'http://thingpinkhash.localhost/Login/instagramLogin',
            'REDIRECT-AUTH-URI' => 'http://thingpinkhash.localhost/Login/instagramLogin',
            'responseType' => 'code'
            )
        )
    ));
