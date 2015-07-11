<?php

namespace HashTag\Controllers;


class IndexController extends ControllerBase
{

	public function indexAction()
	{	
		$this->view->instagramLoginUrl = $this->authInstagram->getInstagramLoginUrl();
		$session = $this->session;
		if($session->has('auth-identity')){
			$this->view->name = $session->get('auth-identity')['name'];
		}
		$this->view->loginUrl = $this->authFacebook->getFacebookLoginUrl();

		
		
	}

	
}

