<?php
session_start();
	include('../db_params.php');
	 $did=$_GET['id'];
	mysql_query("DELETE FROM studentreg WHERE id = $did");
	header("location: confirm-students.php");
	exit();
?>


