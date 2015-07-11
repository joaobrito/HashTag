<?php

namespace HashTag\Controllers;

use HashTag\Controllers\ControllerBase as ControllerBase;

class LoginController extends ControllerBase
{

	public function indexAction()
	{
		if(isset($this->session->get('auth-facebook')){
			
		}
	}

	public function facebookLoginAction(){
		$helper = $this->facebook->getRedirectLoginHelper();
		$this->auth->facebookLoginResponse($helper);
	}

}

