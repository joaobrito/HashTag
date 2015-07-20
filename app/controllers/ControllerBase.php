<?php
namespace HashTag\Controllers;

use Phalcon\Mvc\Controller as Controller;

use HashTag\Dispatcher\Dispatcher as Dispatcher;

class ControllerBase extends Controller
{
	/**
	 * Execute before the router so we can determine if this is a provate controller, and must be authenticated, or a
	 * public controller that is open to all.
	 *
	 * @param Dispatcher $dispatcher
	 * @return boolean
	 */
	public function beforeExecuteRoute(Dispatcher $dispatcher)
	{
		if($this->session->has('auth-facebook') || $this->session->has('auth-instagram')){
			$this->view->setTemplateAfter('private');
		}
		else{
			$this->view->setTemplateAfter('public');
		}
		
		//$this->view->setVar('logged_in', is_array($this->auth->getIdentity()));
/*
		$controllerName = $dispatcher->getControllerName();

		// Only check permissions on private controllers
		if ($this->acl->isPrivate($controllerName)) {

			// Get the current identity
			$identity = $this->auth->getIdentity();

			// If there is no identity available the user is redirected to index/index
			if (!is_array($identity)) {

				$this->flash->notice('You don\'t have access to this module: private');

				$dispatcher->forward(array(
					'controller' => 'index',
					'action' => 'index'
				));
				return false;
			}

			// Check if the user have permission to the current option
			$actionName = $dispatcher->getActionName();
			if (!$this->acl->isAllowed($identity['profile'], $controllerName, $actionName)) {

				$this->flash->notice('You don\'t have access to this module: ' . $controllerName . ':' . $actionName);

				if ($this->acl->isAllowed($identity['profile'], $controllerName, 'index')) {
					$dispatcher->forward(array(
						'controller' => $controllerName,
						'action' => 'index'
					));
				} else {
					$dispatcher->forward(array(
						'controller' => 'user_control',
						'action' => 'index'
					));
				}

				return false;
			}
		}*/
	}
}
