<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
	
	<title>Install Glix Schools</title>
	<link rel="stylesheet" href="install/install.css" /

</head>

<body>

	<div class="cp_install">

		<div class="cp_install_content">
	
			<div class="cp_install_brand unselect">Glix Schools</div>

			<div class="cp_install_steps">
				<div class="cp_step_1">
					<div class="cp_step step_1 selected">Step 1</div>
					<div class="cp_step step_2">Step 2</div>
					<div class="cp_step step_3">Step 3</div>
				</div>
				<div class="cp_step_2">
					<div class="cp_step step_1">Step 1</div>
					<div class="cp_step step_2 selected">Step 2</div>
					<div class="cp_step step_3">Step 3</div>
				</div>
				<div class="cp_step_3">
					<div class="cp_step step_1">Step 1</div>
					<div class="cp_step step_2">Step 2</div>
					<div class="cp_step step_3 selected">Step 3</div>
				</div>
			</div>

			<div class="cp_install_error shadow">

				<div class="error_l" id="error_1">
					<span style="font-weight:bold;">MySQLi connection failed!</span><br />Make sure you are using the correct information
				</div>

				<div class="error_l" id="error_2">
					<span style="font-weight:bold;">Please complete all database required fields</span>
				</div>

				<div class="error_l" id="error_2">
					<span style="font-weight:bold;">You need to set username and password for Administration panel</span>
				</div>
			
			</div>

			<div class="cp_install_inputs shadow">

				<div class="install_step_1">

					<input name="db_host" id="db_host" type="text" class="input_focus" placeholder="Database hostname" />
					<input name="db_user" id="db_user" type="text" class="input_focus" placeholder="Database username" />
					<input name="db_pass" id="db_pass" type="text" class="input_focus" placeholder="Database password" />
					<input name="db_name" id="db_name" type="text" class="input_focus" placeholder="Database name" />
					<input name="in" id="install_1" type="submit" class="login_button" value="Install Glix" />

				</div>

				<div class="install_step_2">

					<input name="cp_admin" id="cp_admin" type="text" class="input_focus" placeholder="Admin username" value="admin" />
					<input name="cp_pass" id="cp_pass" type="text" class="input_focus" placeholder="Admin password" value="admin" />
					<input name="fb_api" id="fb_api" type="text" class="input_focus" placeholder="Facebook App ID (optional)" />
					<input name="in" id="install_2" type="submit" class="login_button" value="Save settings" />

				</div>

				<div class="install_step_3">

					<div class="congrats">Congratulations!</div>
					<div class="congrats_info"><br />Glix Schools has been succesful installed to your server</div>
					<input name="in" id="install_3" type="submit" class="login_button" value="Launch Glix" />

				</div>

			</div>

		</div>

	</div>

	<script src="assets/jquery/jquery-2.1.3.min.js" type="text/javascript"></script>
	<script type="text/javascript">
	$(document).on('click', '#install_1', function() {

		var db_host = $('#db_host').val();
		var db_user = $('#db_user').val();
		var db_pass = $('#db_pass').val();
		var db_name = $('#db_name').val();

		if(db_host.length > 1 && db_user.length > 1 && db_name.length > 1) {

			$('#install_1').val('Please wait').css('background','url(../assets/img/loading_2.gif) no-repeat 100px center #5cc64c');
			$('#install_1').css('pointer-events','none');
			$('#install_1').css('opacity','0.9');

			$.post('install/step_1.php', { db_host: db_host, db_user: db_user, db_pass: db_pass, db_name: db_name }, function(get) {

				if(get == 1) {

					$('.cp_step_1, .install_step_1, #error_1, #error_2, .cp_install_error').hide();
					$('.cp_step_2, .install_step_2').show();
				
				} else {

					$('#error_2').hide();
					$('.cp_install_error, #error_1').show();
			
				}

				$('#install_1').val('Install Glix').css('background','#5cc64c');
				$('#install_1').css('pointer-events','auto');
				$('#install_1').css('opacity','1');

			});

		} else {

			$('#error_1').hide();
			$('.cp_install_error, #error_2').show();

		}

	});

	$(document).on('click', '#install_2', function() {

		var cp_admin = $('#cp_admin').val();
		var cp_pass = $('#cp_pass').val();
		var fb_api = $('#fb_api').val();

		if(cp_admin.length > 1 && cp_pass.length > 1) {

			$('#install_2').val('Please wait').css('background','url(../assets/img/loading_2.gif) no-repeat 100px center #5cc64c');
			$('#install_2').css('pointer-events','none');
			$('#install_2').css('opacity','0.9');

			$.post('install/step_2.php', { cp_admin: cp_admin, cp_pass: cp_pass, fb_api: fb_api }, function(get) {

				if(get == 1) {

					$('.cp_step_2, .install_step_2, #error_1, #error_2, .cp_install_error').hide();
					$('.cp_step_3, .install_step_3').show();
				
				} else {
					
					//
			
				}

				$('#install_2').val('Save settings').css('background','#5cc64c');
				$('#install_2').css('pointer-events','auto');
				$('#install_2').css('opacity','1');

			});

		} else {

			$('#error_1, #error_2').hide();
			$('.cp_install_error, #error_3').show();

		}

	});

	$(document).on('click', '#install_3', function() {

		$('#install_3').val('Please wait').css('background','url(../assets/img/loading_2.gif) no-repeat 100px center #5cc64c');
		$('#install_3').css('pointer-events','none');
		$('#install_3').css('opacity','0.9');

		$.get('install/step_3.php', function() {

			window.location = 'http://<?=$_SERVER['HTTP_HOST'];?>';

		});

	});
	</script>

</body>
</html>