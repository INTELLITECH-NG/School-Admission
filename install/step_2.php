<?php
	if(isset($_POST['cp_admin']) && $_POST['cp_admin'] != '' && isset($_POST['cp_pass']) && $_POST['cp_pass']!='') {

		$cp_admin = $_POST['cp_admin'];
		$cp_pass = $_POST['cp_pass'];
		$fb_api = $_POST['fb_api'];

		require('../inc/db.php');

		@mysqli_query($db,"INSERT INTO `settings` (`remove_comments`,`cookie_bar`,`lang`,`allow_lang`) VALUES (2, 'Faq Content', 0, 1, 'http://".$_SERVER['HTTP_HOST']."', 'Glix', '".$fb_api."', '', '<div class=\"pagetitle\">Page title</div><div class=\"pagecontent\">Page content</div>','<div class=\"pagetitle\">Page title</div><div class=\"pagecontent\">Page content</div>', '<div class=\"pagetitle\">Page title</div><div class=\"pagecontent\">Page content</div>', 'email@yourdomain.com', 'Welcome to Glix', 'Homepage, keywords, goes, here', 'Homepage description goes here', 'Browse users', 'browse users, keywords, goes here', 'Browse users description', '%name%', '%name%, keywords, goes, here', '%name% description', '%name% photo on Glix', '%name%, glix, photos', '%photodesc%', 1, 1, 1,'color_5','color_3','color_3','1','1','1','1','1','1','1','1','2','1','600|600','1','1','1','1','english.php','1')");
		@mysqli_query($db,"INSERT INTO `cp` (`login`,`pass`) VALUES ('".$cp_admin."', '".$cp_pass."')");

		echo 1;

	}
?>