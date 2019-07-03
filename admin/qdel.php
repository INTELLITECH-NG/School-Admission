<?php
session_start();
	include('../db_params.php');
	 $did=$_GET['id'];
	mysql_query("DELETE FROM suggest WHERE id = $did");
	header("location: addquestions");
	exit();
?>


