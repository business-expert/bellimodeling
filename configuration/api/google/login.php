<?php 
/*-----------------------------------------------------------------------------------
File contains the Google signin + after signin close window
-------------------------------------------------------------------------------------*/


/*-----------------------------------------------------------------------------------
START Google signin process
-------------------------------------------------------------------------------------*/
require 'google.php';
$GOOGLE= new Social();

if(isset($_GET['google'])){
	$GOOGLE->google();
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