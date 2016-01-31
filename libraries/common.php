<?php 
/*-----------------------------------------------------------------------------------
File contains the Common methods
Access by using- $COMMON object
-------------------------------------------------------------------------------------*/

/*-----------------------------------------------------------------------------------
START common class -
-------------------------------------------------------------------------------------*/
class common
{
	function __construct() 
	{
		
	}

/*-----------------------------------------------------------------------------------
Method to redirect on given path
-------------------------------------------------------------------------------------*/	
	function redirect_to($path)
	{
		header("Location: ".$path);
	}


/*-----------------------------------------------------------------------------------
Method returns role id of given title
-------------------------------------------------------------------------------------*/
	function role_id($title)
	{
		global $DB, $LINK;
		$RS=$DB->query("SELECT id FROM roles WHERE title='".$title."'",$LINK);
		$data = mysql_fetch_array($RS);
		return $data["id"];

	}	

/*-----------------------------------------------------------------------------------
Method returns user full name of given user id
-------------------------------------------------------------------------------------*/
	function user_full_name($user_id)
	{
		global $DB, $LINK;
		$RS=$DB->query("SELECT CONCAT_WS(fname,lname) AS user_full_name FROM user_informations WHERE user_id='".$user_id."'",$LINK);
		$data = mysql_fetch_array($RS);
		return $data["user_full_name"];
	}

/*-----------------------------------------------------------------------------------
Method returns user email of given user id
-------------------------------------------------------------------------------------*/
	function user_email($user_id)
	{
		global $DB, $LINK;
		$RS=$DB->query("SELECT email FROM users WHERE id='".$user_id."'",$LINK);
		$data = mysql_fetch_array($RS);
		return $data["email"];
	}

}	
/*-----------------------------------------------------------------------------------
END common html -
-------------------------------------------------------------------------------------*/
?>