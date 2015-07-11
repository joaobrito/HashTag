<?php

namespace HashTag\Controllers;

use HashTag\Controllers\ControllerBase as ControllerBase;

class LoginController extends ControllerBase
{

	public function facebookLoginAction(){
		$helper = $this->facebook->getRedirectLoginHelper();
		$this->authFacebook->facebookLoginResponse($helper);
	}

}
