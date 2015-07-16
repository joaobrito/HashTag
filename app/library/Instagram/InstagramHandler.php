<?php

namespace HashTag\Instagram;

use Phalcon\Mvc\User\Component as Component;
use Phalcon\Http\Client\Request as Request;

//InstagramObjects
use HashTag\Instagram\Objects\Post as Post; 

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
		
		$response = $this->processPostListResponse($response->body, true);
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

	/**
	 * Converts json into Instagram Objects
	 *
	 * @return void
	 * @author 
	 **/
	protected function processPostListResponse($jsonResponse)
	{
		$response = json_decode($jsonResponse,true);

		$posts = array();
		foreach ($response['data'] as $value) {
			array_push($posts,new Post($value));
		}

		return $posts;
		
	}
}