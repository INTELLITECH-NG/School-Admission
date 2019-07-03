<?php
session_start();
error_reporting(1);



require '../db_params.php';
$admin = $_SESSION['SESS_MEMBER_ADMIN'];
if (!$admin){
header("location:../index.php");
}
?>
<?php include 'inc/config.php'; ?>
<?php include 'inc/template_start.php'; ?>
<?php include 'inc/page_head.php'; ?>

<!-- Page content -->
<div id="page-content">
    <!-- Dashboard Header -->
    <!-- For an image header add the class 'content-header-media' and an image as in the following example -->
    <div class="content-header content-header-media">
        <div class="header-section">
            <div class="row">
                <!-- Main Title (hidden on small devices for the statistics to fit) -->
                <div class="col-md-4 col-lg-6 hidden-xs hidden-sm">
                    <h1>Welcome <strong> <?php echo $admin; ?> </strong><br><small> You Look Awesome!</small></h1>
                </div>
                <!-- END Main Title -->

                <!-- Top Stats -->
                <div class="col-md-8 col-lg-6">
                    <div class="row text-center">
                        <div class="col-xs-4 col-sm-3">
                            <h2 class="animation-hatch">
                                <strong> <?php  $sql=mysql_query("select * from regcode where status = 'unused' ");
                        echo $rol = mysql_num_rows($sql);
                        
                        ?> </strong><br>
                                <small><i class="fa fa-lock fa-2x"></i> Unused Pins</small>
                            </h2>
                        </div>
                        <div class="col-xs-4 col-sm-3">
                            <h2 class="animation-hatch">
                                <strong> <?php  $sql=mysql_query("select * from regcode where status = 'used' ");
                        echo $rol = mysql_num_rows($sql);
                        
                        ?> </strong><br>
                                <small><i class="fa fa-unlock fa-2x"></i> Used Pins</small>
                            </h2>
                        </div>
                        <div class="col-xs-4 col-sm-3">
                            <h2 class="animation-hatch">
                                <strong> <?php  $sql=mysql_query("select * from studentreg where status= 'undone' ");
                        echo $rol = mysql_num_rows($sql);
                        
                        ?> </strong><br>
                                <small><i class="fa fa-users fa-2x"></i> Students</small>
                            </h2>
                        </div>
                        <!-- We hide the last stat to fit the other 3 on small devices -->
                        <div class="col-sm-3 hidden-xs">
                            <h2 class="animation-hatch">
                                <strong> <?php  $sql=mysql_query("select * from studentreg where status = 'undone' ");
                        echo $rol = mysql_num_rows($sql);
                        
                        ?> </strong><br>
                                <small><i class="fa fa-book"></i> Total Registration</small>
                            </h2>
                        </div>
                    </div>
                </div>
                <!-- END Top Stats -->
            </div>
        </div>
        <!-- For best results use an image with a resolution of 2560x248 pixels (You can also use a blurred image with ratio 10:1 - eg: 1000x100 pixels - it will adjust and look great!) -->
        <img src="img/header.jpeg" alt="header image" width="1843" height="1228 " class="animation-pulseSlow">
    </div>
    <!-- END Dashboard Header -->

    <!-- Mini Top Stats Row -->
    <div class="row">
        <div class="col-sm-6 col-lg-3">
            <!-- Widget -->
            <a href="page_ready_article.php" class="widget widget-hover-effect1">
                <div class="widget-simple">
                    <div class="widget-icon pull-left themed-background-autumn animation-fadeIn">
                        <i class="fa fa-lock"></i>
                    </div>
                    <h3 class="widget-content text-right animation-pullDown">
                        <strong> <?php  $sql=mysql_query("select * from regcode where status = 'unused' ");
                        echo $rol = mysql_num_rows($sql);
                        
                        ?> </strong><br>
                        <small> Unused Pins</small>
                    </h3>
                </div>
            </a>
            <!-- END Widget -->
        </div>
        <div class="col-sm-6 col-lg-3">
            <!-- Widget -->
            <a href="page_comp_charts.php" class="widget widget-hover-effect1">
                <div class="widget-simple">
                    <div class="widget-icon pull-left themed-background-spring animation-fadeIn">
                        <i class="fa fa-unlock"></i>
                    </div>
                    <h3 class="widget-content text-right animation-pullDown">
                        <strong> <?php  $sql=mysql_query("select * from regcode where status = 'used' ");
                        echo $rol = mysql_num_rows($sql);
                        
                        ?> </strong><br>
                        <small>Used Pins</small>
                    </h3>
                </div>
            </a>
            <!-- END Widget -->
        </div>
        <div class="col-sm-6 col-lg-3">
            <!-- Widget -->
            <a href="page_ready_inbox.php" class="widget widget-hover-effect1">
                <div class="widget-simple">
                    <div class="widget-icon pull-left themed-background-fire animation-fadeIn">
                        <i class="fa fa-users"></i>
                    </div>
                    <h3 class="widget-content text-right animation-pullDown">
                        <strong> <?php  $sql=mysql_query("select * from studentreg where status= 'undone' ");
                        echo $rol = mysql_num_rows($sql);
                        
                        ?> </strong>
                        <small> Students</small>
                    </h3>
                </div>
            </a>
            <!-- END Widget -->
        </div>
        <div class="col-sm-6 col-lg-3">
            <!-- Widget -->
            <a href="page_comp_gallery.php" class="widget widget-hover-effect1">
                <div class="widget-simple">
                    <div class="widget-icon pull-left themed-background-amethyst animation-fadeIn">
                        <i class="fa fa-book"></i>
                    </div>
                    <h3 class="widget-content text-right animation-pullDown">
                        <strong> <?php  $sql=mysql_query("select * from studentreg where status = 'undone' ");
                        echo $rol = mysql_num_rows($sql);
                        
                        ?> </strong>
                        <small> Total Student Registration</small>
                    </h3>
                </div>
            </a>
            <!-- END Widget -->
        </div>
    </div>
    <!-- END Mini Top Stats Row -->
</div>
<!-- END Page Content -->

<?php include 'inc/page_footer.php'; ?>

<!-- Remember to include excanvas for IE8 chart support -->
<!--[if IE 8]><script src="js/helpers/excanvas.min.js"></script><![endif]-->

<?php include 'inc/template_scripts.php'; ?>

<!-- Google Maps API + Gmaps Plugin, must be loaded in the page you would like to use maps -->
<script src="//maps.google.com/maps/api/js?sensor=true"></script>
<script src="js/helpers/gmaps.min.js"></script>

<!-- Load and execute javascript code used only in this page -->
<script src="js/pages/index.js"></script>
<script>$(function(){ Index.init(); });</script>

<?php include 'inc/template_end.php'; ?>