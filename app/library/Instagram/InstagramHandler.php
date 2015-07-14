<?php

namespace HashTag\Instagram;

use Phalcon\Mvc\User\Component as Component;
use Phalcon\Http\Client\Request as Request;
/**
* 
*/
class InstagramHandler extends Component
{

	public function getAllPosts($hashTag = null)
	{
		is_null($hashTag) ? $hashTag = $this->config->instagram->defaultHashTag : $hashTag;
		$this->view->hashTag = $hashTag;
		$baseUri = 'https://api.instagram.com/v1/tags/'.$hashTag.'/media/recent';
		$params = array(
			'access_token' => $this->session->get('auth-instagram')
			);
		$response = $this->instagramGetRequest($baseUri,$params);

		//$posts = $response->

		foreach ($variable as $value) {
			# code...
		}

		return $response;
	}

	protected function instagramPostRequest($baseUri, $params = array()){
		$request = Request::getProvider();
		$request->setBaseUri($baseUri);
		$response = $request->post($params);

		if($response->header->statusCode == 200){
			return $response;
		}
		else{
			//TODO error case throw exception
			return null;
		}
	}

	protected function instagramGetRequest($baseUri, $params = array()){
		$request = Request::getProvider();
		$request->setBaseUri($baseUri);
		$request->header->set('Accept', 'application/json');
		$response = $request->get($baseUri, $params);

		return $response;
	}
}