<?php 
/*-----------------------------------------------------------------------------------
File contains constants be available whole site.
-------------------------------------------------------------------------------------*/

/*-----------------------------------------------------------------------------------
START Application constants configuration
-------------------------------------------------------------------------------------*/

/*-----------------------------------------------------------------------------------
Defined Site session prefix
Defined if site is live set http://www else set http://
-------------------------------------------------------------------------------------*/
	define('SITE_SESSION','bellinity');
	//------------- LOCAL -------------//
	//define("LIVE", false);
	//------------ CLIENTS -------------//
	define("LIVE", false);
	$http = (LIVE) ? "http://www." : "http://";

/*-----------------------------------------------------------------------------------
Database configuration
-------------------------------------------------------------------------------------*/ 

//--------------- LOCAL ----------------------//
	// define("DB_HOST", "localhost");
	// define("DB_USERNAME", "root");
	// define("DB_PASSWORD", "earthPlanet");
	// define("DB_NAME", "bellinity");

//--------------- CLIENTS ----------------------//
	define("DB_HOST", "localhost");
	define("DB_USERNAME", "pankaj");
	define("DB_PASSWORD", "510546162");
	define("DB_NAME", "admin_Bellinityv3");



/*-----------------------------------------------------------------------------------
Fron end constants configuration
-------------------------------------------------------------------------------------*/ 
	define('SITE','bellinity');
	//---------------- LOCAL -------------------------//
	//define('SITE_ROOT', $_SERVER['DOCUMENT_ROOT']."/".SITE."/");
	//---------------- CLIENT -------------------------//
	define('SITE_ROOT', $_SERVER['DOCUMENT_ROOT']."/");


	//---------------------- LOCAL -----------------------------//
	//define('SITE_PATH', $http."".$_SERVER['HTTP_HOST']."/".SITE."/");

	//---------------------- CLIENT -----------------------------//
	define('SITE_PATH', $http."".$_SERVER['HTTP_HOST']."/");

	define('MODELS_PATH', SITE_ROOT.'models/');
	define('CONTROLLERS_PATH', SITE_ROOT.'controllers/');
	define('VIEWS_PATH', SITE_ROOT.'views/');
	define('LIBIRARIES_PATH', SITE_ROOT.'libraries/');
	define('ASSETS_PATH', SITE_PATH.'assets/');
	define('IMAGES_PATH', ASSETS_PATH.'images/');
	define('STYLESHEETS_PATH', ASSETS_PATH.'stylesheets/');
	define('JAVASCRIPTS_PATH', ASSETS_PATH.'javascripts/');
	define('BOWER_COMPONENTS_PATH', ASSETS_PATH.'bower_components/');
	define("SHARED_PATH", VIEWS_PATH.'shared/');
	define("APIES_URL", SITE_PATH."configuration/api/");
	define('APIES_PATH', SITE_ROOT.'configuration/api/');
	define('APIES_ASSETS_PATH', SITE_PATH.'configuration/api/assets/');
	define("UNAUTHORIZE_ACCESS_PATH",SITE_PATH."?cntrl=errors&act=unauthorized");
	define("PAGE_NOT_FOUND_PATH",SITE_PATH."?cntrl=errors&act=page-not-found");



/*-----------------------------------------------------------------------------------
Administrator constants configuration
-------------------------------------------------------------------------------------*/
	define('ADMINISTRATOR',SITE."/administrator");
	define('ADMINISTRATOR_ROOT', $_SERVER['DOCUMENT_ROOT']."/".ADMINISTRATOR."/");
	define('ADMINISTRATOR_PATH', "http://".$_SERVER['HTTP_HOST']."/".ADMINISTRATOR."/");
	define('ADMINISTRATOR_MODELS_PATH', ADMINISTRATOR_ROOT.'models/');
	define('ADMINISTRATOR_CONTROLLERS_PATH', ADMINISTRATOR_ROOT.'controllers/');
	define('ADMINISTRATOR_VIEWS_PATH', ADMINISTRATOR_ROOT.'views/');
	define('ADMINISTRATOR_LIBIRARIES_PATH', ADMINISTRATOR_ROOT.'libraries/');
	define('ADMINISTRATOR_ASSETS_PATH', ADMINISTRATOR_PATH.'assets/');
	define('ADMINISTRATOR_ASSETS_IMAGES_PATH', ADMINISTRATOR_ASSETS_PATH.'images/');
	define('ADMINISTRATOR_ASSETS_STYLESHEETS_PATH', ADMINISTRATOR_ASSETS_PATH.'stylesheets/');
	define('ADMINISTRATOR_ASSETS_JAVASCRIPTS_PATH', ADMINISTRATOR_ASSETS_PATH.'javascripts/');
	define('ADMINISTRATOR_BOWER_COMPONENTS_PATH', ADMINISTRATOR_ASSETS_PATH.'bower_components/');
	define("ADMINISTRATOR_SHARED_PATH", ADMINISTRATOR_VIEWS_PATH.'shared/');


/*-----------------------------------------------------------------------------------
Other constants configuration
-------------------------------------------------------------------------------------*/
	define('LOGS_PATH',SITE_ROOT.'logs/');
	define('LOGS_FILE_NAME',date("Y_m_d_H").".txt");
	define('SQL_ERROR_FILE_NAME',"query_error_".date("Y_m_d_H").".txt");
	define("ADMINISTRATOR_LANDING_PATH", "dashboard");
	define("LANDING_PATH", "home");
	define("DEFAULT_LAYOUT", "default_layout");
	define("LAYOUT_PATH", VIEWS_PATH."layouts/");

/*-----------------------------------------------------------------------------------
Common constants configuration
-------------------------------------------------------------------------------------*/
	define('ADMINISTRATOR_EMAIL','info@bellinity.com');


/*-----------------------------------------------------------------------------------
SMTP constants configuration
-------------------------------------------------------------------------------------*/
	define('SMTP_HOST','host'); 
	define('SMTP_PORT','port');  
	define('SMTP_USERNAME',"username");
	define('SMTP_PASSWORD',"password");
	define('EMAIL_FROM',"email-from");
	define('EMAIL_FROM_NAME',"email-from-name");

/*-----------------------------------------------------------------------------------
END Application constants configuration
-------------------------------------------------------------------------------------*/
?>
