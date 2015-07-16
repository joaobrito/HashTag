<?php
namespace HashTag\Forms;

use Phalcon\Forms\Form as Form;
use Phalcon\Forms\Element\Text as Text;
use Phalcon\Forms\Element\Password as Password;
use Phalcon\Forms\Element\Submit as Submit;

class LoginForm extends Form{
	
	public function initialize(){

		$username = new Text('username', 'User Name');
		$this->add($username);

		$password = new Password('password');		
		$this->add($password);

		$loginButton = new Submit('Login');
	}

}