<?php

$loader = new \Phalcon\Loader();

/**
 * We're a registering a set of directories taken from the configuration file
 */
$loader->registerNamespaces(
    array(
        'HashTag\Controllers' => $config->application->controllersDir,
        'HashTag\Models' => $config->application->modelsDir,
        'HashTag\Forms' => $config->application->formsDir,
        'HashTag' => $config->application->libraryDir
    )
)->register();

//print_r($loader);
