<?php
session_start();
	include('../db_params.php');
	 $did=$_GET['id'];
	mysql_query("DELETE FROM regcode WHERE id = $did");
	header("location: list-registration-pin.php");
	exit();
?>


