<?php 
/*-----------------------------------------------------------------------------------
File contains the methods used for securing purpose
-------------------------------------------------------------------------------------*/

/*-----------------------------------------------------------------------------------
START class secure -
-------------------------------------------------------------------------------------*/
class secure
{
	function __construct() 
	{
		
	}

/*-----------------------------------------------------------------------------------
Method to check secure access -
-------------------------------------------------------------------------------------*/
	function is_autorized_access()
	{
		(isset($_POST["SECURE_TOKEN"])) ? true : false;		
	}
	


/*-----------------------------------------------------------------------------------
method to generate confirmation code -
-------------------------------------------------------------------------------------*/
	function confirmationCode()
	{
		return md5(date("Y-m-d H:i:s"));
	}
	

/*-----------------------------------------------------------------------------------
Method to generate confirmation url -
-------------------------------------------------------------------------------------*/	
	function confirmationLink($confirmationCode)
	{
		return SITE_PATH."?cntrl=users&act=confirm&confirmationCode=".$confirmationCode;
	}

	
/*-----------------------------------------------------------------------------------
Method to check autorized access if not redired to unauthorized path -
-------------------------------------------------------------------------------------*/
	function autorized_access($actions)
	{
		// global $act;
		// if(in_array(strtoupper($act), $actions))
		// {	
		// 	// if(!isset($_POST["SECURE_TOKEN"]))
		// 	if(!isset($_POST))
		// 	{
		// 		header("Location: ".UNAUTHORIZE_ACCESS_PATH);
		// 	}
		// }	
	}


/*-----------------------------------------------------------------------------------
Method to redired to unauthorized path -
-------------------------------------------------------------------------------------*/	
	function unauthorized_access()
	{
		header("Location: ".UNAUTHORIZE_ACCESS_PATH);
	}


/*-----------------------------------------------------------------------------------
Method to redirection for unauthorized access -
-------------------------------------------------------------------------------------*/
	function page_not_found()
	{
		header("Location: ".PAGE_NOT_FOUND_PATH);
	}
}	
/*-----------------------------------------------------------------------------------
END class secure -
-------------------------------------------------------------------------------------*/
?>