<?php  
namespace HashTag\Facebook;

use Facebook\PersistentData\PersistentDataInterface as PersistentDataInterface;
/**
* 
*/
class MyPhalconPersistentDataHandler implements PersistentDataInterface
{
	private $session;

	function __construct($session) {
		$this->session = $session;
	}

	public function set($key, $value)
	{
		echo 'get ' . $value . ' value => '. $value . ' on Phalcon FW';
		$this->session->set($key, $value);
	}

	public function get($key)
	{
		
		if($this->session->has($key)){
			return $this->session->get($key);
		}
	}

}