<?php

namespace HashTag\Controllers;

use Phalcon\Http\Request as Request;

use HashTag\Controllers\ControllerBase as ControllerBase;

class LoginController extends ControllerBase
{

	public function facebookLoginAction(){
		$helper = $this->facebook->getRedirectLoginHelper();
		$this->authFacebook->facebookLoginResponse($helper);
	}

	public function instagramLoginAction(){

		$accessToken = $this->request->get($this->config->instagram->properties->get('responseType'));
		$this->authInstagram->instagramLoginResponse($accessToken);
		
		//$this->dispatcher->forward(array('controller' => 'instagram', 'action' => 'index'));
		$this->response->redirect('../instagram/');
		$this->view->disable();
		// $response = new Response();
		// $response->redirect('/list');
		// $response->send();
	}
}
