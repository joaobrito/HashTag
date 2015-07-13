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
		
		// $params = array(
		// 	$this->
		// 	'' => ''
		// 	);
		// $response = $this->instagramPostRequest()
		
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
		$response = $request->get();
		return null;
	}
}