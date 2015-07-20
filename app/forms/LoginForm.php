<?php
namespace HashTag\Forms;

use Phalcon\Forms\Form as Form;

use Phalcon\Forms\Element\Text as Text;
use Phalcon\Forms\Element\Password as Password;
use Phalcon\Forms\Element\Submit as Submit;
use Phalcon\Forms\Element\Hidden as Hidden;

class LoginForm extends Form{
	
	public function initialize(){


		//TODO integration with module Security
		$this->add(new Hidden('hidden field'));

		$this->add(new Text('username', array('placeholder' => 'Username')));
		$this->add(new Password('password',array('placeholder' => 'Password')));
		$this->add(new Submit('submit', array(
            'class' => 'btn', 'value' => 'Log In!')));

		$this->add(new Hidden('fb_code', array('code', $this->authFacebook->getFacebookLoginUrl())));
	}

}

