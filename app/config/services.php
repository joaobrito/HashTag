<?php
/**
 * Services are globally registered in this file
 *
 * @var \Phalcon\Config $config
 */

use Phalcon\Di\FactoryDefault;
use Phalcon\Mvc\View;
use Phalcon\Mvc\Url as UrlResolver;
use Phalcon\Db\Adapter\Pdo\Mysql as DbAdapter;
use Phalcon\Mvc\View\Engine\Volt as VoltEngine;
use Phalcon\Mvc\Model\Metadata\Memory as MetaDataAdapter;
use Phalcon\Session\Adapter\Files as SessionAdapter;
use Phalcon\Http\Request as Request;

use HashTag\Dispatcher\Dispatcher as Dispatcher;
use HashTag\Auth\AuthFacebook as AuthFacebook;

use HashTag\Auth\AuthInstagram as AuthInstagram;
use HashTag\Instagram\InstagramHandler as InstagramHandler; 

use Facebook\Facebook as Facebook;
use HashTag\Facebook\MyPhalconPersistentDataHandler as MyPhalconPersistentDataHandler;
/**
 * The FactoryDefault Dependency Injector automatically register the right services providing a full stack framework
 */
$di = new FactoryDefault();

/**
*   Set the config variable to di 
*/
$di->set('config', $config);

/**
 * The URL component is used to generate all kind of urls in the application
 */
$di->set('url', function () use ($config) {
    $url = new UrlResolver();
    $url->setBaseUri($config->application->baseUri);

    return $url;
}, true);

/**
 * Setting up the view component
 */
$di->setShared('view', function () use ($config) {

    $view = new View();

    $view->setViewsDir($config->application->viewsDir);

    $view->registerEngines(array(
        '.volt' => function ($view, $di) use ($config) {

            $volt = new VoltEngine($view, $di);

            $volt->setOptions(array(
                'compiledPath' => $config->application->cacheDir,
                'compiledSeparator' => '_'
                ));

            return $volt;
        },
        '.phtml' => 'Phalcon\Mvc\View\Engine\Php'
        ));

    return $view;
});

/**
 * Database connection is created based in the parameters defined in the configuration file
 */
$di->set('db', function () use ($config) {
    return new DbAdapter($config->database->toArray());
});

/**
 * If the configuration specify the use of metadata adapter use it or use memory otherwise
 */
$di->set('modelsMetadata', function () {
    return new MetaDataAdapter();
});

/**
 * Start the session the first time some component request the session service
 */
$di->setShared('session', function () {
    $session = new SessionAdapter();
    $session->start();
    return $session;
});

/**
* Start dispatcher
*/
$di->set('dispatcher', function() {
    $dispatcher = new Dispatcher();
    return $dispatcher;
}
);


/**
* Setup Facebook Auth
*/

$di->set('facebook', function () use ($config, $di){
    $session = $di->getShared('session');
    $session->set("redirectUrl", $config->facebook->redirectUrl);
    $fb = new Facebook(array(
        'app_id' => $config->facebook->appId, 
        'app_secret' => $config->facebook->appSecret,
        'default_graph_version' => $config->facebook->default_graph_version,
        'persistent_data_handler' => 
        new MyPhalconPersistentDataHandler($session)
        ));
    return $fb;
});

$di->set('authFacebook', function() {
    return new AuthFacebook();
});

/**
* Setup Request Handler
*/

$di->set('request', function(){
    $request = new Request();
    return $request;
});

/**
* Setup Instagram Auth
*/

$di->set('authInstagram', function(){
    $authInstagram = new AuthInstagram(); 
    return $authInstagram;
});


/**
* Setup Instagram Handler
*/
$di->set('instagramHandler', function(){
    return new InstagramHandler();
});

