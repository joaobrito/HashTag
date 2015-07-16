<?php

namespace HashTag\Instagram;

use Phalcon\Mvc\User\Component as Component;
use Phalcon\Http\Client\Request as Request;

use HashTag\Instagram\Objects\Post as Post; 

/**
* 
*/
class InstagramHandler extends Component
{

	public function getPost($id){
		$baseUri = 'https://api.instagram.com/v1/media/' . $id;

		$params = array(
			'client_id' => $this->config->get('instagram')['properties']['CLIENT-ID']
			);

		$response = $this->instagramGetRequest($baseUri, $params);
		
		$response = $this->processPost($response['data']);
		return $response;
	}

	public function getAllPosts($hashTag = null)
	{
		is_null($hashTag) ? $hashTag = $this->config->instagram->defaultHashTag : $hashTag;

		$this->view->hashTag = $hashTag;
		$baseUri = 'https://api.instagram.com/v1/tags/'.$hashTag.'/media/recent';

		$params = array(
			//'access_token' => $this->session->get('auth-instagram')
			'client_id' => $this->config->get('instagram')['properties']['CLIENT-ID']
			);
		$response = $this->instagramGetRequest($baseUri,$params);
		
		$response = $this->processPostListResponse($response);
		return $response;
	}


	/**
	* Process Data Fuctions
	*/

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
		
		$response = json_decode($response->body,true);

		return $response;
	}

	/**
	 * Converts json into Instagram Objects
	 *
	 * @return void
	 * @author 
	 **/
	protected function processPostListResponse($response)
	{
		$posts = array();
		foreach ($response['data'] as $value) {
			array_push($posts,$this->processPost($value));
		}

		return $posts;
		
	}

	protected function processPost($postData){
		$post = new Post($postData);
		return $post;
	}
	
}