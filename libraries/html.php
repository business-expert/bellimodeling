<?php 
/*-----------------------------------------------------------------------------------
File contains the methods used for html purpose
-------------------------------------------------------------------------------------*/

/*-----------------------------------------------------------------------------------
START class html -
-------------------------------------------------------------------------------------*/

class html extends common
{
	function __construct() 
	{
		
	}
	
/*-----------------------------------------------------------------------------------
Method returns interests list
-------------------------------------------------------------------------------------*/	
	function get_interest_list_as_li($interests="")
	{
		$interests_list_li = null;
		global $DB,$LINK;
		$RS=$DB->query("SELECT title FROM interests WHERE status='ACTIVE'");
		while($datum = mysql_fetch_array($RS))
		{
			$selected = (in_array($datum["title"], explode("#", $interests))) ? "class='selected'" : "";
			$interests_list_li .= "<li ".$selected.">".$datum["title"]."</li>";
		}	
		return ($interests_list_li!=null) ? $interests_list_li : "<li class='color_red'>There are no interests list</li>";

	}
}


/*-----------------------------------------------------------------------------------
END class secure -
-------------------------------------------------------------------------------------*/
?>