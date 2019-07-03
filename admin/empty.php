<?php
session_start();
error_reporting(0);



require '../db_params.php';
$admin = $_SESSION['SESS_MEMBER_ADMIN'];
if (!$admin){
header("location:../index.php");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin Angle - Ritedev Technologies</title>
<META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">

<link href="css/font-awesome.css" rel="stylesheet" type="text/css" />
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="css/animate.css" rel="stylesheet" type="text/css" />
<link href="css/admin.css" rel="stylesheet" type="text/css" />
<link href="css/jquerysctipttop.css" rel="stylesheet" type="text/css">
<link href="plugins/kalendar/kalendar.css" rel="stylesheet">
<link rel="stylesheet" href="plugins/scroll/nanoscroller.css">
<link href="plugins/morris/morris.css" rel="stylesheet" />
<link href="css/font-awesome-animation.min.css" rel="stylesheet" type="text/css" />
</head>
<body class="light_theme  fixed_header left_nav_fixed">
<div class="wrapper">

  <div class="header_bar">

    <div class="brand">

      <div class="logo" style="display:block"><span class="theme_color">RITEDEV</span> TECH</div>
      <div class="small_logo" style="display:none"><img src="images/s-logo.png" width="50" height="47" alt="s-logo" /> <img src="images/r-logo.png" width="122" height="20" alt="r-logo" /></div>
    </div>

    <div class="header_top_bar">

      <a href="javascript:void(0);" class="menutoggle"> <i class="fa fa-bars"></i> </a>
      <div class="top_left">
        <div class="top_left_menu">
          <ul>
            <li> <a href="javascript:void(0);"><i class="fa fa-repeat"></i></a> </li>
            <li class="dropdown"> <a data-toggle="dropdown" href="javascript:void(0);"> <i class="fa fa-th-large"></i> </a>
			<ul class="drop_down_task dropdown-menu" style="margin-top:39px">
				<div class="top_left_pointer"></div>
				<li><div class="checkbox">
                  <label>
                    <input type="checkbox" name="remember">
                    Remember me </label>
                </div></li>
				<li> <a href="help.php"><i class="fa fa-question-circle"></i> Help</a> </li>
				<li> <a href="login.php"><i class="fa fa-power-off"></i> Logout</a> </li>
		  </ul>
			</li>
          </ul>
        </div>
      </div>
	  <div class="top_right_bar">
        <div class="user_admin dropdown"> <a href="javascript:void(0);" data-toggle="dropdown"><img src="images/user.png" /><span class="user_adminname"><?php echo $admin; ?></span> <b class="caret"></b> </a>
          <ul class="dropdown-menu">
            <div class="top_pointer"></div>
            <li> <a href="help.php"><i class="fa fa-question-circle"></i> Help</a> </li>
			<li> <a href="login.php"><i class="fa fa-power-off"></i> Logout</a> </li>
          </ul>
        </div>
		</div>
    </div>

  </div>

  <div class="inner">
<div class="left_nav">


      <div class="search_bar"> <i class="fa fa-search"></i>
        <input name="" type="text" class="search" placeholder="Search Dashboard..." />
      </div>
      <div class="left_nav_slidebar">
        <ul>
          <li class="left_nav_active theme_border"><a href="javascript:void(0);"><i class="fa fa-home"></i> DASHBOARD <span class="left_nav_pointer"></span> <span class="plus"><i class="fa fa-plus"></i></span> </a>
            <ul class="opened" style="display:block">
              <li> <a href="admin/admin.php"> <span>&nbsp;</span> <i class="fa fa-circle theme_color"></i> <b class="theme_color">Dashboard</b> </a> </li>
              <li> <a href="help.php"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Help</b> </a> </li></ul>
          </li>
          <li> <a href="adquest.php"> <i class="fa fa-edit"></i> CBT Questions Setting</a>
		  </li>
          <li> <a href="javascript:void(0);"> <i class="fa fa-tasks"></i> Exams Settings<span class="plus"><i class="fa fa-plus"></i></span></a>
            <ul>
              <li> <a href="subadd.php"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Add Exam Title</b> </a> </li>
              <li> <a href="questionadd.php"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Add Questions</b> </a> </li>
              </ul>
          </li>
		    <li> <a href="testadd.php"> <i class="fa fa-edit"></i>Add Secondary Level</a>
		  </li>
		   <li> <a href="confirm.php"> <i class="fa fa-edit"></i> Confirm Reg No</a>
		  </li>
          <li> <a href="javascript:void(0);"> <i class="fa fa-users icon"></i>Registration Pins <span class="plus"><i class="fa fa-plus"></i></span> </a>
            <ul>
              <li> <a href="todo.html"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Generate New Pins</b> </a> </li>
              <li> <a href="pinlist.php"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>List of Pins</b> </a> </li>
			  </ul>
          </li>
		   <li> <a href="logout.php"> <i class="fa fa-power-off"></i> Logout</a>
		  </li>
         </ul>
      </div>
    </div>

    <div class="contentpanel">

      <div class="pull-left breadcrumb_admin clear_both">
        <div class="pull-left page_title theme_color">
          <h1>Welcome <?php echo $admin; ?></h1>
          <h2 class="">Please make sure you logout after making changes on the platform.</h2>
        </div>
        <div class="pull-right">
          <ol class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li><a href="#">DASHBOARD</a></li>
            <li class="active">Dashboard</li>
          </ol>
        </div>
      </div>
      <div class="container clear_both padding_fix">

        <div class="row">
          <div class="col-sm-3 col-sm-6">
            <div class="information blue_info">
              <div class="information_inner">
              <div class="info blue_symbols font-animation"><i class="fa fa-unlock icon faa-pulse animated"></i></div>
                <span>Unused Pins</span>
                <h1 class="bolded"><?php  $sql=mysql_query("select * from regcode where status = 'unused' ");
						echo $rol = mysql_num_rows($sql);
						
						?></h1>
                <div class="infoprogress_blue">
                  <div class="blueprogress"></div>
                </div>
				</div>
            </div>
          </div>
          <div class="col-sm-3 col-sm-6">
            <div class="information red_info">
              <div class="information_inner">
              <div class="info red_symbols"><i class="fa fa-lock icon faa-wrench animated"></i></div>
                <span>Used Pins</span>
                <h1 class="bolded"><?php  $sql=mysql_query("select * from regcode where status = 'used' ");
						echo $rol = mysql_num_rows($sql);
						
						?></h1>
                <div class="infoprogress_red">
                  <div class="redprogress"></div>
                </div>
               </div>
            </div>
          </div>
         
        </div>
        
        
      </div>
     
    </div>
    
  </div>
  
</div>

<script src="js/jquery-2.1.0.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/common-script.js"></script>
<script src="js/jquery.slimscroll.min.js"></script>
<script src="js/jquery.sparkline.js"></script>
<script src="js/sparkline-chart.js"></script>
<script src="js/graph.js"></script>
<script src="js/edit-graph.js"></script>
<script src="plugins/kalendar/kalendar.js" type="text/javascript"></script>
<script src="plugins/kalendar/edit-kalendar.js" type="text/javascript"></script>

<script src="plugins/sparkline/jquery.sparkline.js" type="text/javascript"></script>
<script src="plugins/sparkline/jquery.customSelect.min.js" ></script> 
<script src="plugins/sparkline/sparkline-chart.js"></script> 
<script src="plugins/sparkline/easy-pie-chart.js"></script>
<script src="plugins/morris/morris.min.js" type="text/javascript"></script> 
<script src="plugins/morris/raphael-min.js" type="text/javascript"></script>  
<script src="plugins/morris/morris-script.js"></script> 





<script src="plugins/demo-slider/demo-slider.js"></script>
<script src="plugins/knob/jquery.knob.min.js"></script> 




<script src="js/jPushMenu.js"></script> 
<script src="js/side-chats.js"></script>
<script src="js/jquery.slimscroll.min.js"></script>
<script src="plugins/scroll/jquery.nanoscroller.js"></script>



</body>
</html>
