<?php 
/*-----------------------------------------------------------------------------------
File contains the Social configuration, for use of signup with social.
-------------------------------------------------------------------------------------*/

/*-----------------------------------------------------------------------------------
START defining social constants
-------------------------------------------------------------------------------------*/

//Starting session
session_start();
//Define base URL
define('BASE_URL', filter_var('http://localhost/bellinity/', FILTER_SANITIZE_URL));

//---------- GOOGLE Configuration
define('CLIENT_ID','687808629754-o7nfks59uc3hm8f2sfbrflgs5k2plod7.apps.googleusercontent.com');
define('CLIENT_SECRET','KMk7DpY5CWGN9K7Q7grK9zdE');
define('REDIRECT_URI','http://localhost/bellinity/cntrl=api&act=google');
define('APPROVAL_PROMPT','auto');
define('ACCESS_TYPE','offline');

//------------ FACEBOOK Configuration
define('APP_ID','750381828365758');
define('APP_SECRET','1c4c84797f52d0ca043eeca05c46434a');

define('SITE','bellinity');
define('SITE_ROOT', $_SERVER['DOCUMENT_ROOT']."/".SITE."/");
define('SITE_PATH', "http://"."".$_SERVER['HTTP_HOST']."/".SITE."/");

/*-----------------------------------------------------------------------------------
START defining social constants
-------------------------------------------------------------------------------------*/
?>