<?php  
namespace HashTag\Facebook;

use Facebook\PersistentData\PersistentDataInterface as PersistentDataInterface;
/**
* 
*/
class MyPhalconPersistentDataHandler implements PersistentDataInterface
{
	private $session;
	private $url;

	function __construct($session) {
		$this->session = $session;
	}

	public function set($key, $value)
	{
		$this->session->set($key, $value);
	}

	public function get($key)
	{
		if($this->session->has($key)){
			return $this->session->get($key);
		}
	}

	public function getRedirectUrl(){
		return $this->url;
	}

}