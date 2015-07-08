<?php

namespace HashTag\Dispatcher;

use Phalcon\Mvc\Dispatcher as PhalconDispatcher;
use Phalcon\Events\Manager as EventsManager;

/**
* 
*/
class Dispatcher extends PhalconDispatcher
{
	function __construct($foo = null) {
		$this->initialize();
	}

	protected function initialize()
	{
		$eventsManager = new EventsManager();
		$eventsManager->attach("dispatch", function($event, $dispatcher) {

		});

	    //Bind the eventsManager to the view component
		$this->setEventsManager($eventsManager);
		$this->setDefaultNamespace('HashTag\Controllers');
		return $this;
	}
}