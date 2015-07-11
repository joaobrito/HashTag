<?php

defined('APP_PATH') || define('APP_PATH', realpath('.'));

return new \Phalcon\Config(array(
    'database' => array(
        'adapter'     => 'Mysql',
        'host'        => 'localhost',
        'username'    => 'thingPink',
        'password'    => 'thingPink',
        'dbname'      => 'thingPink',
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
        )
    ));
