<?php 
/*-----------------------------------------------------------------------------------
File contains signup controller's action control.
-------------------------------------------------------------------------------------*/

/*-----------------------------------------------------------------------------------
START signup controller
-------------------------------------------------------------------------------------*/

//Create object of Home model
$Model = new Signup();

switch(strtoupper($act))
{
	case 'ACCOUNT_TYPE':
			break;
	case 'DETAILS':
			$Model->collect_data_in_session($act);	
		break;
	case 'ABOUT_YOU':
			$Model->collect_data_in_session($act);		
		break;				
	case 'TERMS_OF_USE':
			$Model->collect_data_in_session($act);
			break;	
	case 'CREATE':
		if(isset($_POST["SECURE_TOKEN"]))
		{
			$Model->collect_data_in_session($act);
			$Model->create_user();
		}
		else
		{
			$SECURE->unauthorized_access();
		}	
		break;	
	case 'FACEBOOK':
			break;

	case 'SUCCESS':
			break;
	case 'SUCCESS':
			break;			
	default:
		$SECURE->page_not_found();
		break;
}
/*-----------------------------------------------------------------------------------
END signup controller
-------------------------------------------------------------------------------------*/	
?>