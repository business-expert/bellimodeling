<?php 
/*-----------------------------------------------------------------------------------
File contains the Facebook configuration for signin and collection data.
-------------------------------------------------------------------------------------*/

/*-----------------------------------------------------------------------------------
START Facebook configuration
-------------------------------------------------------------------------------------*/

require_once '../configuration.php';
require_once 'lib/facebook/facebook.php';

class Social{
  
 function facebook(){
     $facebook = new Facebook(array(
		'appId'		=>  APP_ID,
		'secret'	=> APP_SECRET,
		));
			$user = $facebook->getUser();
			if($user){
				try{
					//get the facebook user profile data
					$user_profile = $facebook->api('/me');
					//$params = array('next' => BASE_URL.'logout.php');
					//logout url
					//$logout =$facebook->getLogoutUrl($params);
					$_SESSION['User']=$user_profile;
					//$_SESSION['facebook_logout']=$logout;
				}catch(FacebookApiException $e){
					error_log($e);
					$user = NULL;
				}		
			}
			if(empty($user)){
			  //login url	
			  $loginurl = $facebook->getLoginUrl(array(
							'scope'			=> 'email,read_stream, publish_stream, user_birthday, user_location, user_work_history, user_hometown, user_photos',
							'redirect_uri'	=> 'http://localhost/bellinity/configuration/api/facebook/login.php?facebook',
							'display'=>'popup'
							));
			  header('Location: '.$loginurl);
			}
  
  }

}
/*-----------------------------------------------------------------------------------
START Facebook configuration
-------------------------------------------------------------------------------------*/
?>