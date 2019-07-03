<?php
	$install_query_1 = "
		CREATE TABLE IF NOT EXISTS `exam` (
  			`id` int(100) NOT NULL AUTO_INCREMENT,
  			`type` int(5) NOT NULL,
  			`uid` int(100) NOT NULL,
  			`aid` int(100) NOT NULL,
  			`content` varchar(180) CHARACTER SET utf8 NOT NULL,
  			`content_id` varchar(100) NOT NULL,
  			`date` int(11) NOT NULL,
  			`seen` int(1) NOT NULL,
  			PRIMARY KEY (`id`),
  			UNIQUE KEY `id` (`id`)
		);";

	$install_query_2 = "
		CREATE TABLE IF NOT EXISTS `student` (
  			`id` int(100) NOT NULL AUTO_INCREMENT,
  			`chat_id` varchar(100) NOT NULL,
  			`conversation` longtext CHARACTER SET utf8 NOT NULL,
  			`read_1` varchar(100) NOT NULL,
  			`read_2` varchar(100) NOT NULL,
  			`open` int(100) NOT NULL,
  			`last` varchar(10000) NOT NULL,
  			`date` int(11) NOT NULL,
  			PRIMARY KEY (`id`),
  			UNIQUE KEY `id` (`id`)
		);";

	$install_query_3 = "
		CREATE TABLE IF NOT EXISTS `comments` (
  			`id` int(100) NOT NULL AUTO_INCREMENT,
  			`from` int(100) NOT NULL,
  			`to` varchar(100) NOT NULL,
  			`msg` varchar(10000) CHARACTER SET utf8 NOT NULL,
  			`time` int(100) NOT NULL,
  			PRIMARY KEY (`id`),
  			UNIQUE KEY `id` (`id`)
		);";

	$install_query_4 = "
		CREATE TABLE IF NOT EXISTS `cp` (
  			`id` int(1) NOT NULL AUTO_INCREMENT,
  			`login` varchar(254) NOT NULL,
  			`pass` varchar(254) NOT NULL,
  			`seen` int(11) NOT NULL,
  			PRIMARY KEY (`id`),
  			UNIQUE KEY `id` (`id`)
		);";

	$install_query_5 = "
		CREATE TABLE IF NOT EXISTS `subjects` (
  			`id` int(100) NOT NULL AUTO_INCREMENT,
  			`photo` varchar(100) NOT NULL,
  			`desc` longtext CHARACTER SET utf8 NOT NULL,
  			`uid` int(100) NOT NULL,
  			`votes` int(100) NOT NULL,
  			`comments` int(100) NOT NULL,
  			`views` int(100) NOT NULL,
  			`score` float NOT NULL,
  			`ratings` longtext NOT NULL,
  			`time` int(100) NOT NULL,
  			`url` varchar(254) NOT NULL,
			`type` int(1) NOT NULL,
  			`report` int(1) NOT NULL,
			`privacy` int(1) NOT NULL,
  			PRIMARY KEY (`id`),
  			UNIQUE KEY `id` (`id`)
	);";

	$install_query_6 = "
		CREATE TABLE IF NOT EXISTS `screening` (
  			`id` int(100) NOT NULL AUTO_INCREMENT,
  			`from` varchar(100) NOT NULL,
  			`to` varchar(100) NOT NULL,
  			`time` int(100) NOT NULL,
  			PRIMARY KEY (`id`),
  			UNIQUE KEY `id` (`id`)
		);";

	$install_query_7 = "
		CREATE TABLE IF NOT EXISTS `settings` (
  			`id` int(1) NOT NULL AUTO_INCREMENT,
  			`site_url` varchar(254) CHARACTER SET utf8 NOT NULL,
			`logo` varchar(254) CHARACTER SET utf8 NOT NULL,
			`fb_api` varchar(254) CHARACTER SET utf8 NOT NULL,
			`analytics` varchar(8000) CHARACTER SET utf8 NOT NULL,
  			`about_page` longtext CHARACTER SET utf8 NOT NULL,
  			`terms_page` longtext CHARACTER SET utf8 NOT NULL,
  			`privacy_page` longtext CHARACTER SET utf8 NOT NULL,
  			`contact` varchar(255) NOT NULL,
  			`meta_1` longtext CHARACTER SET utf8 NOT NULL,
  			`meta_2` longtext CHARACTER SET utf8 NOT NULL,
  			`meta_3` longtext CHARACTER SET utf8 NOT NULL,
  			`meta_4` longtext CHARACTER SET utf8 NOT NULL,
  			`meta_5` longtext CHARACTER SET utf8 NOT NULL,
  			`meta_6` longtext CHARACTER SET utf8 NOT NULL,
  			`meta_7` longtext CHARACTER SET utf8 NOT NULL,
  			`meta_8` longtext CHARACTER SET utf8 NOT NULL,
  			`meta_9` longtext CHARACTER SET utf8 NOT NULL,
  			`meta_10` longtext CHARACTER SET utf8 NOT NULL,
  			`meta_11` longtext CHARACTER SET utf8 NOT NULL,
  			`meta_12` longtext CHARACTER SET utf8 NOT NULL,
  			`social_photos` int(1) NOT NULL,
  			`fullsize_photos` int(1) NOT NULL,
  			`hashtags` int(1) NOT NULL,
			`custom_1` varchar(255) NOT NULL,
			`custom_2` varchar(255) NOT NULL,
			`custom_3` varchar(255) NOT NULL,
			`desc_links` int(1) NOT NULL,
			`comments_links` int(1) NOT NULL,
			`comments_icons` int(1) NOT NULL,
			`video` int(1) NOT NULL,
			`verified` int(1) NOT NULL,
			`rating_system` int(1) NOT NULL,
			`custom_4` int(1) NOT NULL,
			`custom_5` int(1) NOT NULL,
			`custom_6` int(1) NOT NULL,
			`video_skin` int(1) NOT NULL,
			`video_size` varchar(100) NOT NULL,
			`report_setting` int(1) NOT NULL,
			`about_me` int(1) NOT NULL,
			`remove_comments` int(1) NOT NULL,
			`cookie_bar` int(1) NOT NULL,
			`lang` varchar(100) CHARACTER SET utf8 NOT NULL,
			`allow_lang` int(1) NOT NULL,
  			`home_style` int(1) NOT NULL,
  			`faq_page` longtext NOT NULL,
  			`300_250_web` longtext NOT NULL,
  			`728_90_web` longtext NOT NULL,
  			`468_15_web` longtext NOT NULL,
  			`email_limit` int(1) NOT NULL,
  			`320_50_m` longtext NOT NULL,
  			PRIMARY KEY (`id`),
  			UNIQUE KEY `id` (`id`)
		);";

	$install_query_8 = "
		CREATE TABLE IF NOT EXISTS `temp` (
  			`id` int(100) NOT NULL AUTO_INCREMENT,
  			`email` varchar(254) CHARACTER SET utf8 NOT NULL,
  			`key` varchar(100) NOT NULL,
  			`password` varchar(100) NOT NULL,
  			PRIMARY KEY (`id`),
  			UNIQUE KEY `uid` (`email`)
		);";
	
	$install_query_9 = "
		CREATE TABLE IF NOT EXISTS `users` (
  			`id` int(100) NOT NULL AUTO_INCREMENT,
  			`email` varchar(254) NOT NULL,
  			`name` varchar(254) CHARACTER SET utf8 NOT NULL,
  			`gender` varchar(1) NOT NULL,
  			`password` varchar(254) NOT NULL,
  			`time` int(100) NOT NULL,
  			`cover` longtext CHARACTER SET utf8 NOT NULL,
  			`pic` varchar(100) NOT NULL,
  			`user` varchar(50) CHARACTER SET utf8 NOT NULL,
  			`seen` int(11) NOT NULL,
  			`followers` longtext NOT NULL,
  			`born` int(11) NOT NULL,
  			`location` longtext CHARACTER SET utf8 NOT NULL,
  			`social` longtext CHARACTER SET utf8 NOT NULL,
			`verified` int(1) NOT NULL,
  			`about_me` varchar(1000) CHARACTER SET utf8 NOT NULL,
			`last_mail` int(12) NOT NULL,
			`privacy_1` int(1) NOT NULL,
			`privacy_2` int(1) NOT NULL,
			`privacy_3` int(1) NOT NULL,
  			PRIMARY KEY (`id`),
  			UNIQUE KEY `id` (`id`)
		);";

	if(isset($_POST['db_host']) && $_POST['db_host'] != '') {

		$db_host = $_POST['db_host'];
		$db_user = $_POST['db_user'];
		$db_pass = $_POST['db_pass'];
		$db_name = $_POST['db_name'];

		$db = @mysqli_connect($db_host,$db_user,$db_pass,$db_name);

		if (mysqli_connect_errno()) {

			echo '2';
	
		} else {

			@mysqli_query($db, $install_query_1);
			@mysqli_query($db, $install_query_2);
			@mysqli_query($db, $install_query_3);
			@mysqli_query($db, $install_query_4);
			@mysqli_query($db, $install_query_5);
			@mysqli_query($db, $install_query_6);
			@mysqli_query($db, $install_query_7);
			@mysqli_query($db, $install_query_8);
			@mysqli_query($db, $install_query_9);

			$db_file = fopen('../inc/db.php', 'w');
			
			$line_1 = '<?php $installed = 1; $db = mysqli_connect("'.$db_host.'","'.$db_user.'","'.$db_pass.'","'.$db_name.'"); ?>';

			fwrite($db_file, $line_1);

			fclose($db_file);

			echo 1;

		}

	}
?>