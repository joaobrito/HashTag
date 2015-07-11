<?php 

namespace HashTag\Auth;

use Phalcon\Mvc\User\Component as Component;

/**
* 
*/
class AuthInstagram extends Component
{
	
	public function getInstagramLoginUrl(){
		$instagramAuthUrl = $this->config->instagram->get('oauthUrl');
		$instagramProperties = $this->config->instagram->get('properties');
		
		foreach ($instagramProperties as $key => $value) {
			$instagramAuthUrl = str_replace($key, $value, $instagramAuthUrl);
		}

		return $instagramAuthUrl;
	}
	

}