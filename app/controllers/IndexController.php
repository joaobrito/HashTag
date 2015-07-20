<?php

namespace HashTag\Controllers;


class IndexController extends ControllerBase
{

	public function indexAction()
	{	
		$session = $this->session;
		if($session->has('auth-facebook')){
			$this->view->name = $session->get('auth-facebook')['name'];
		}
		else{
			$this->view->loginUrl = $this->authFacebook->getFacebookLoginUrl();
		}

		if(!$session->has('auth-instagram')){
			$this->view->instagramLoginUrl = $this->authInstagram->getInstagramLoginUrl();
			
		}
		$this->view->instagramDetails = $this->session->get('auth-instagram');

		
	}

	public function destroyAction(){
		$this->session->destroy();
		$this->response->redirect('/');
	}
}

