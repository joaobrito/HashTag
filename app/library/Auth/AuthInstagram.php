<?php 

namespace HashTag\Auth;

use Phalcon\Mvc\User\Component as Component;
use Phalcon\Http\Client\Request as Request;

/**
* 
*/
class AuthInstagram extends Component
{
	
	/**
	* @var string
	*/
	private $accessToken;

	public function getInstagramLoginUrl(){
		$instagramAuthUrl = $this->config->instagram->get('oauthUrl');
		$instagramProperties = $this->config->instagram->get('properties');
		
		foreach ($instagramProperties as $key => $value) {
			$instagramAuthUrl = str_replace($key, $value, $instagramAuthUrl);
		}

		return $instagramAuthUrl;
	}

	public function instagramLoginResponse($code)
	{
		$instaRequest = Request::getProvider();
		$instaRequest->setBaseUri('https://api.instagram.com/');
		$response = $instaRequest->post('oauth/access_token',array(
			'client_id' => $this->config->instagram->get('properties')['CLIENT-ID'],
			'client_secret' => $this->config->instagram->get('properties')['clientSecret'],
			'grant_type' => 'authorization_code',
			'redirect_uri' => $this->config->instagram->get('properties')['REDIRECT-AUTH-URI'],
			'code'=>$code
			));
		$this->session->destroy('auth-instagram');
		if($response->header->statusCode == 200){
			echo '<br><br>OK - setting session with token '. $response->body . '<br>';
			$this->session->set('auth-instagram', $response->body);

		}
		$this->dispatcher->forward(array('controller' => 'index', 'action' => 'index'));

		return $instaRequest;
	}

	public function setAccessToken($accessToken){
		$this->accessToken = $this->instagramLoginResponse($accessToken);
	}	

	public function getAccessToken(){
		return $this->accessToken;
	}
}

 /*Phalcon\Http\Client\Response Object ( [body] => {"access_token":"1933446083.5625d48.838423374b3c4ece8c3b640010608f94","user":{"username":"joao.r.brito","bio":"","website":"","profile_picture":"https:\/\/instagramimages-a.akamaihd.net\/profiles\/anonymousUser.jpg","full_name":"Jo\u00e3o Brito","id":"1933446083"}} 
 	[header] => Phalcon\Http\Client\Header Object ( [fields:Phalcon\Http\Client\Header:private] => Array ( [Content-Language] => en [Expires] => Sat, 01 Jan 2000 00:00:00 GMT [Vary] => Cookie, Accept-Language, Accept-Encoding [Pragma] => no-cache [Cache-Control] => private, no-cache, no-store, must-revalidate [Date] => Mon, 13 Jul 2015 20:38:52 GMT [Content-Type] => application/json [Set-Cookie] => csrftoken=c31b97c5b944d5a895989c4afc744b52; expires=Mon, 11-Jul-2016 20:38:52 GMT; Max-Age=31449600; Path=/ [Connection] => close [Content-Length] => 265 ) [version] => 1.1 [statusCode] => 200 [statusMessage] => OK [status] => HTTP/1.1 200 OK ) ) */