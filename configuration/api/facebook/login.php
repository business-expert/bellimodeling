<?php 
/*-----------------------------------------------------------------------------------
File contains the Facebook signin + after signin close window
-------------------------------------------------------------------------------------*/


/*-----------------------------------------------------------------------------------
START Facebook signin process
-------------------------------------------------------------------------------------*/

require 'facebook.php';
$FACEBOOK= new Social();

if(isset($_GET['facebook'])){
	$FACEBOOK->facebook();

	//Sotring data in signup session
	$_SESSION["SIGNUP"]["DETAILS"]["email"] = $_SESSION['User']['email'];
	$_SESSION["SIGNUP"]["DETAILS"]["email"] = $_SESSION['User']['first_name'];
	$_SESSION["SIGNUP"]["DETAILS"]["email"] = $_SESSION['User']['last_name'];
	$_SESSION["SIGNUP"]["DETAILS"]["email"] = $_SESSION['User']['email'];

}

?>
<!-- after authentication close the popup -->
<script type="text/javascript">
window.close();
</script>

<?php 
/*-----------------------------------------------------------------------------------
END Google signin
-------------------------------------------------------------------------------------*/
?>