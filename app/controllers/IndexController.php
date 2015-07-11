<?php

namespace HashTag\Controllers;

use Facebook\FacebookRedirectLoginHelper as FacebookRedirectLoginHelper;
use HashTag\Auth\Auth;

class IndexController extends ControllerBase
{

	public function indexAction()
	{	
		$this->view->loginUrl = $this->auth->getFacebookLoginUrl();
		
	}

	

	public function logoutAction(){
	}
}

