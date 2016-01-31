<?php

class Signup
{
	function __construct() 
	{
		
	}

	function inspect()
	{
		print_r($_SESSION);
		die();

	}
	
	#Method to collect data in session.
	function collect_data_in_session($act)
	{
		global $COMMON,$SECURE;
		$act = strtoupper($act);
		if(isset($_POST["SECURE_TOKEN"]))
		{	

			if($act=="DETAILS")
			{
				$_SESSION["SIGNUP"]["ACCOUNT_TYPE"]["account_type"] = $_POST["account_type"];
			}	
			else if($act=="ABOUT_YOU")
			{
				$_SESSION["SIGNUP"]["DETAILS"]["fname"] = $_POST["fname"];
				$_SESSION["SIGNUP"]["DETAILS"]["lname"] = $_POST["lname"];
				$_SESSION["SIGNUP"]["DETAILS"]["email"] = $_POST["email"];
				$_SESSION["SIGNUP"]["DETAILS"]["password"] = $_POST["password"];
				$_SESSION["SIGNUP"]["DETAILS"]["password_confirmation"] = $_POST["password_confirmation"];
				
			}	
			else if($act=="TERMS_OF_USE")
			{				
				$_SESSION["SIGNUP"]["ABOUT_YOU"]["web_links"]["title"] = $_POST["web_links"]["title"];
				$_SESSION["SIGNUP"]["ABOUT_YOU"]["profession_credits"]["title"] = $_POST["profession_credits"]["title"];
				$_SESSION["SIGNUP"]["ABOUT_YOU"]["talents"] = $_POST["talents"];
				$_SESSION["SIGNUP"]["ABOUT_YOU"]["interests"] = $_POST["interests"];
				
				
			}	
			if($act=="CREATE")
			{
				$_SESSION["SIGNUP"]["TERMS_OF_USE"]["terms"] = $_POST["terms"];	
				
			}				
		}
		// else
		// {
		// 	$SECURE->unauthorized_access();
		// }	
		
	}

	function create_user()
	{	
		global $COMMON, $DB, $LINK, $EMAILER, $SECURE;
		if(isset($_POST["SECURE_TOKEN"]))
		{
			$curDate = date("Y-m-d H:i:s");
			$confirmationCode = $SECURE->confirmationCode();
			$insertDataUsers = array(
				"role_id" => $COMMON->role_id($_SESSION["SIGNUP"]["ACCOUNT_TYPE"]["account_type"]),
				"email" => $_SESSION["SIGNUP"]["DETAILS"]["email"],
				"password" => md5($_SESSION["SIGNUP"]["DETAILS"]["password"]),
				"confirmation" => $confirmationCode,
				"created_at" => $curDate,
				"updated_at" => $curDate,
				"confirmation_at" => $curDate
			);  //Full texts 	id 	role_id 	username 	email 	password 	description 	created_at 	updated_at 	expired_at 	confirmation Ascending 	confirmation_at 	confirmed_at 

			$user_id = $DB->addNewRecord("users", $insertDataUsers, $LINK);

			$insertDataUserInformations = array(
				"user_id" => $user_id,
				"fname" => $_SESSION["SIGNUP"]["DETAILS"]["fname"],
				"lname" => $_SESSION["SIGNUP"]["DETAILS"]["lname"],
				"talents" => $_SESSION["SIGNUP"]["ABOUT_YOU"]["talents"],
				"interests" => $_SESSION["SIGNUP"]["ABOUT_YOU"]["interests"]
			);

			$insertDataWebLinks = array(
				"user_id" => $user_id,
				"web_link_type_id" => 1,
				"title" => $_SESSION["SIGNUP"]["ABOUT_YOU"]["web_links"]["title"]
			);	

			$insertDataProfessionCredits = array(
				"user_id" => $user_id,
				"profession_credit_type_id" => 1,
				"title" => $_SESSION["SIGNUP"]["ABOUT_YOU"]["profession_credits"]["title"]
			);	

			if($user_id)
			{
				$DB->addNewRecord("user_informations", $insertDataUserInformations, $LINK);
				$DB->addNewRecord("web_links", $insertDataWebLinks, $LINK);
				$DB->addNewRecord("profession_credits", $insertDataProfessionCredits, $LINK);

				#-------------START Sending user confirmation email -----------------------------#
				#Send email notification to user ------
				$emailData = array(
					"{email_full_name}"=>$COMMON->user_full_name($user_id),
					"{email_confirmation_link}"=>$SECURE->confirmationLink($confirmationCode),
					"{site_path}"=>SITE_PATH,
					);
				$to=      	$COMMON->user_email($user_id);
				$subject=	 "Bellinity: Confirm Your Account";	
				$body=    	$EMAILER->emailTemplate("email_signup_user.html", $emailData);
				//Send email here
				//$EMAILER->sendmail($to, $subject, $body, $attachment='');
				###########################################################
				

				#Send email notification to administrator if required-----
				#-----Question if admin required notification-  CLIENT ?
				###########################################################
				#-------------END Sending user confirmation email ------------------------------#

				session_destroy();//Destroy session
				$COMMON->redirect_to(SITE_PATH."?cntrl=signup&act=success");//redirect to success
			}	
			else
			{
				$COMMON->redirect_to(SITE_PATH."?cntrl=signup&act=error");
			}	
		}	
		// else
		// {
		// 	$SECURE->unauthorized_access();
		// }
	}
	

	public function defaultData()
	{
		return true;
	}
	
}

?>