<?php 
/*-----------------------------------------------------------------------------------
File contains the actions of those request called via ajax.
-------------------------------------------------------------------------------------*/

/*-----------------------------------------------------------------------------------
START Ajax configuration
-------------------------------------------------------------------------------------*/

/*-----------------------------------------------------------------------------------
Include application_configuration file
-------------------------------------------------------------------------------------*/
include_once($_SERVER['DOCUMENT_ROOT']."/bellinity/configuration/application/application_configuration.php");


/*-----------------------------------------------------------------------------------
Make sure request is via ajax-
calling a method if exists based on its parameter act.
-------------------------------------------------------------------------------------*/
if($_REQUEST['ajax'] == true)
{

	$act = $_REQUEST['act'];
	
	if($act != ''){
		if(function_exists($act)){
			echo $act(); die();
		}
	}
}	


/*-----------------------------------------------------------------------------------
Method returns profession list for jquery autosuggest.
-------------------------------------------------------------------------------------*/
function profession_list_for_autosuggest()
{
	global $DB, $COMMON, $SECURE;
	$data = array();
	$SQL="SELECT title FROM profession_credit_types WHERE status='ACTIVE'";
	$RS=$DB->query($SQL);
	while($datum=mysql_fetch_array($RS))
	{
		array_push($data, $datum["title"]);
	}	

	echo json_encode($data);
}

/*-----------------------------------------------------------------------------------
END Ajax configuration
-------------------------------------------------------------------------------------*/
?>