<?php
session_start();
	include('../db_params.php');
	 $did=$_GET['delid'];
	mysql_query("DELETE FROM question WHERE que_id = $did");
	echo '<script type="text/javascript">
alert("The selected question has successfully been deleted from the Database");
window.location="addquestions";
</script>';
	
	
	exit();
?>





