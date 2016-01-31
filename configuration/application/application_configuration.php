<?php 
/*-----------------------------------------------------------------------------------
File contains the code to include libraries files
-------------------------------------------------------------------------------------*/

/*-----------------------------------------------------------------------------------
START including libraries files
-------------------------------------------------------------------------------------*/

/*-----------------------------------------------------------------------------------
Start session as well as set display errors type
-------------------------------------------------------------------------------------*/
session_start();
error_reporting(E_ERROR || E_FATAL);
//ini_set("display_errors",1);

/*-----------------------------------------------------------------------------------
Include configuration files like global_configuration and layouts_configuration
-------------------------------------------------------------------------------------*/
include_once(dirname(__FILE__).'/global_configuration.php');
include_once(dirname(__FILE__).'/layouts_configuration.php');

/*-----------------------------------------------------------------------------------
Creating libraries Object, objects will be available on whole site.
-------------------------------------------------------------------------------------*/
$LOGS		=	new logs(LOGS_FILE_NAME); //Object of log
$QErrLog	=	new logs(SQL_ERROR_FILE_NAME);//Object of query log
$DB 		=	new database(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);//Object of database
$LINK 		=	$DB->dbConnect();//Connecting database
$COMMON    = 	new common();//Object of common
$HTML    = 	new html();//Object of html
$SECURE = new secure();//Object of secure
$EMAILER = new email();//Object of email


/*-----------------------------------------------------------------------------------
Make Sure, Created object must found given class. So Include files on magic function of php
fired on object creation.
-------------------------------------------------------------------------------------*/
function __autoload($classname)
{
	if(file_exists(MODELS_PATH. "/".$classname."/". $classname . 'model.php'))
	{
		include_once MODELS_PATH. "/".$classname."/". $classname . 'model.php';
	}
	else if(file_exists(LIBIRARIES_PATH. "/". $classname . '.php'))
	{			
		include_once LIBIRARIES_PATH. "/". $classname . '.php';
	}
	else
	{
		echo "Class Name '".$classname .".php' not Found"; die;
	}	
}

/*-----------------------------------------------------------------------------------
END including libraries files
-------------------------------------------------------------------------------------*/
?>