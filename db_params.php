<?php
error_reporting(0);
$cn=mysql_connect("localhost","root","") or die("Could not Connect My Sql");
mysql_select_db("glix",$cn)  or die("Could connect to Database");
?>
