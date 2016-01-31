<?php 
/*-----------------------------------------------------------------------------------
This file responsible for compacting all the configuration and creating actual view
based on given controller as well as action+model.
-------------------------------------------------------------------------------------*/

/*-----------------------------------------------------------------------------------
START Compacting configuraion
-------------------------------------------------------------------------------------*/

/*-----------------------------------------------------------------------------------
Including application/main configuration file
-------------------------------------------------------------------------------------*/
include_once(dirname(__FILE__).'/application_configuration.php');


/*-----------------------------------------------------------------------------------
Fetch out controller as well as action from the request.
-------------------------------------------------------------------------------------*/
$cntrl  = strtolower(str_replace("-", "_", $_REQUEST['cntrl']));
$act = strtolower(str_replace("-", "_", $_REQUEST['act']));


/*-----------------------------------------------------------------------------------
Make sure given request must have an existing controller
-------------------------------------------------------------------------------------*/
if($cntrl != "")
{
	//Creating paths for controller + model + view
	$controller = CONTROLLERS_PATH.$cntrl.".php";
	$model = MODELS_PATH.$cntrl."_model.php";
	$view = VIEWS_PATH.$cntrl."/".$act.".php";

	if(file_exists($controller))
	{	
		//Including specific controller + model + view	
		include_once($model);
		include_once($controller);
		include_once(content($cntrl));
	}	
	else
	{
		//Redirect to page not found path
		$SECURE->page_not_found();
	}
}
else
{
	//Creating paths for controller + model + view
	$controller = CONTROLLERS_PATH."".LANDING_PATH.".php";
	$model = MODELS_PATH."".LANDING_PATH."_model.php";
	$view = VIEWS_PATH."".LANDING_PATH."/".LANDING_PATH.".php";	
	//Including defualt controller + model + view		
	include_once($model);
	include_once($controller);
	include_once(content(LANDING_PATH));
}
/*-----------------------------------------------------------------------------------
END Compacting configuraion
-------------------------------------------------------------------------------------*/
?>