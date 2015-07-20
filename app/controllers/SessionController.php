<?php

namespace HashTag\Controllers;

use HashTag\Controllers\ControllerBase as ControllerBase;
use HashTag\Forms\LoginForm as LoginForm;

class SessionController extends ControllerBase
{

	public function indexAction()
	{
		$this->dispatcher->redirect('/session/login');
	}

	public function loginAction(){

		$this->view->form = new LoginForm();
		$this->view->fbUrl = $this->authFacebook->getFacebookLoginUrl();
		$this->view->instaUrl = $this->authInstagram->getInstagramLoginUrl();
		if($this->request->isPost()){
			//$this->view->disable();
			//print_r($this->request->getPost());

		}
	}


	public function facebookLoginAction(){
		$helper = $this->facebook->getRedirectLoginHelper();
		$this->authFacebook->facebookLoginResponse($helper);
		$this->response->redirect('/');
	}

	public function instagramLoginAction(){

		$accessToken = $this->request->get($this->config->instagram->properties->get('responseType'));
		$this->authInstagram->instagramLoginResponse($accessToken);
		
		$this->response->redirect('/');
		//$this->view->disable();
	}


}
