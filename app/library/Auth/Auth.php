<?php

namespace HashTag\Auth;

use Phalcon\Mvc\User\Component;
use Phalcon\Exception as Exception;

use Facebook\Authentication\OAuth2Client as OAuth2Client;
use Facebook\Authentication\AccessTokenMetadata as AccessTokenMetadata;

/**
* 
*/
class Auth extends Component
{
	/**
	 * Retrives Facebook URL for login
	 *
	 * @return string
	 * @author João Brito
	 **/

	public function getFacebookLoginUrl()
	{
		$fb = $this->facebook;
		$this->view->fb = $fb;
		if(!is_null($fb)){
			$helper = $fb->getRedirectLoginHelper();
			return $helper->getLoginUrl($this->config->facebook->redirectUrl, array($config->facebook->permissions));
		}
		else{
			$this->view->message = '$fb null!';
			return new Exception('Facebook API fault');
		}
	}


	/**
	 * Facebook access token validation and store
	 * 
	 * @var facebook helperRedirect
	 * @return null
	 */
	public function facebookLoginResponse($helper){

		$accessToken = $helper->getAccessToken();

		// The OAuth 2.0 client handler helps us manage access tokens
		$oAuth2Client = $this->facebook->getOAuth2Client();

		// Get the access token metadata from /debug_token
		$tokenMetadata = $oAuth2Client->debugToken($accessToken);
		echo '<h3>Metadata</h3>';
		var_dump($tokenMetadata);

		// Validation (these will throw FacebookSDKException's when they fail)
		$tokenMetadata->validateAppId($this->config->facebook->appId);
		
		// If you know the user ID this access token belongs to, you can validate it here
		//$tokenMetadata->validateUserId('123');
		$tokenMetadata->validateExpiration();

		if (! $accessToken->isLongLived()) {
  			// Exchanges a short-lived access token for a long-lived one
			try {
				$accessToken = $oAuth2Client->getLongLivedAccessToken($accessToken);
			} catch (Facebook\Exceptions\FacebookSDKException $e) {
				echo "<p>Error getting long-lived access token: " . $helper->getMessage() . "</p>\n\n";
				exit;
			}

			echo '<h3>Long-lived</h3>';
			var_dump($accessToken->getValue());
		}

		//$_SESSION['fb_access_token'] = (string) $accessToken;
		var_dump($tokenMetadata);
		$this->session->set('auth-accessToken', $accessToken->getValue());
		
	}

}