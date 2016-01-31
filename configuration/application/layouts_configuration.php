<?php
/*-----------------------------------------------------------------------------------
File contains Layouts configuration
Array index defines 'layout name' and value defines 'controller'

FORMAT-----
LAYOUTS =>  array(
"layoutname" => array(
"controllersName"
)
"layoutname" => array(
"controllersName"
)
)
-------------------------------------------------------------------------------------*/

/*-----------------------------------------------------------------------------------
Assign controller to use a specified layout.
-------------------------------------------------------------------------------------*/
$LAYOUTS  = array(
"landing_layout" => 
				array(
					"home"
				),
"signup" => 
				array(
					"signup"
				),

"errors" => array(
					"errors"
			)	
);


/*-----------------------------------------------------------------------------------
Method returns specified layout based on given controller if not exists returns
defualt landing_layout.
-------------------------------------------------------------------------------------*/
function layout($cntrl)
{
	global $LAYOUTS;
	foreach($LAYOUTS as $layout => $controllers)
	{
		if(in_array($cntrl, $controllers))
		{

			return $layout; break;
		}	
	}
	return DEFAULT_LAYOUT;
}

/*-----------------------------------------------------------------------------------
Function returns the specified layout path based on given controller.
-------------------------------------------------------------------------------------*/
function content($cntrl)
{
	return LAYOUT_PATH."".layout($cntrl)."/layout.php";
}

?>