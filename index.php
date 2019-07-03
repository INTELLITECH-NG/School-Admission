<?php
error_reporting(0);
session_start();
    
    //Connect to mysql server
    require "db_params.php";
    
    //Function to sanitize values received from the form. Prevents SQL injection
    if (isset($_POST['regsubmit'])){
        $reg = $_POST['reg'];
    
        
    //Create query
    $qry="SELECT * FROM regcode WHERE code='$reg' AND status='unused'";
    $result=mysql_query($qry);
    
    //Check whether the query was successful or not
    if($result) {
        if(mysql_num_rows($result) > 0) {
            //Login Successful
            session_regenerate_id();
            $reg = mysql_fetch_assoc($result);
            $_SESSION['SESS_CODE_ID'] = $reg['id'];
            $_SESSION['SESS_CODE_NAME'] = $reg['code'];

            session_write_close();
            //if ($level="admin"){
            header("location: registration/register.php");
        }else {
            //Login failed
    
        $qryr=mysql_query("SELECT * FROM regcode WHERE code='$reg'");
        $rwr=mysql_fetch_assoc($qryr);
        if ($rwr['status']=="used"){
            
                echo '<script type="text/javascript">
alert("The PIN you entered has already be USED");
</script>';
        }else{
            
                echo '<script type="text/javascript">
alert("The PIN you entered is wrong or does not exist. Kindly re-check your Card and try again later");
</script>';
                
            
        }
    }
    }
    }
?>
<?php
include 'takelog.php';
?>
<?php include 'inc/config.php'; ?>
<?php include 'inc/template_start.php'; ?>
<?php include 'inc/page_head.php'; ?>

<!-- Home Carousel -->
<div id="home-carousel" class="carousel carousel-home slide" data-ride="carousel" data-interval="5000">
    <!-- Wrapper for slides -->
    <div class="carousel-inner">
        <div class="active item">
         <section class="site-section site-section-light site-section-top themed-background-modern">
                <div class="container">
                    <h1 class="text-center animation-fadeInLeft hidden-xs"><strong>Glix School Management System</strong></h1>
                    <h2 class="text-center animation-fadeInRight push hidden-xs">Everything you need for your school</h2>
                    <p class="text-center animation-fadeIn360">
                        <img src="img/sc.jpeg" alt="Promo Image 4">
                    </p>
                </div>
            </section>
        </div>
        <div class="item">
            <section class="site-section site-section-light site-section-top themed-background-amethyst">
                <div class="container">
                    <h1 class="text-center animation-hatch hidden-xs"><strong>Fully Responsive and Ready</strong></h1>
                    <h2 class="text-center animation-hatch push hidden-xs">Awesome Features for you.</h2>
                    <p class="text-center animation-hatch">
                        <img src="img/sc.jpg" alt="Promo Image 3">
                    </p>
                </div>
            </section>
        </div>
    </div>
    <!-- END Wrapper for slides -->

    <!-- Controls -->
    <a class="left carousel-control" href="#home-carousel" data-slide="prev">
        <span>
            <i class="fa fa-chevron-left"></i>
        </span>
    </a>
    <a class="right carousel-control" href="#home-carousel" data-slide="next">
        <span>
            <i class="fa fa-chevron-right"></i>
        </span>
    </a>
    <!-- END Controls -->
</div>
<!-- END Home Carousel -->

<!-- Action -->
<section class="site-content site-section">
    <div class="container">
        <div class="site-block text-center">
            <a href="http://goo.l.eWED" class="btn btn-lg btn-success"><i class="fa fa-shopping-cart"></i> Purchase GlixSchools ($50) | N18,000</a>
            <a href="https://glix.ritedev.com/demo" class="btn btn-lg btn-primary"><i class="fa fa-share"></i> Live Preview</a>
        </div>
        <hr>
    </div>
</section>
<!-- END Action -->

<!-- Promo #1 -->
<section class="site-content site-section site-slide-content">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 site-block visibility-none" data-toggle="animation-appear" data-animation-class="animation-fadeInRight" data-element-offset="-180">
                <img src="img/placeholders/screenshots/promo_desktop_left.png" alt="Promo #1" class="img-responsive">
            </div>
            <div class="col-sm-6 col-md-5 col-md-offset-1 site-block visibility-none" data-toggle="animation-appear" data-animation-class="animation-fadeInLeft" data-element-offset="-180">
                <h3 class="h2 site-heading site-heading-promo"><strong>Clean and Responsive</strong> Design</h3>
                <p class="promo-content">Glix is a clean and well documented project you need for School, Intern, Application and even Final year projects. This project is designed using the beautiful <a href="">ProUI html template.</a></p>
            </div>
        </div>
        <hr>
    </div>
</section>
<!-- END Promo #1 -->

<!-- Promo #3 -->
<section class="site-content site-section site-slide-content">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 site-block visibility-none" data-toggle="animation-appear" data-animation-class="animation-fadeInRight" data-element-offset="-180">
                <img src="img/placeholders/screenshots/promo_tablet.png" alt="Promo #3" class="img-responsive">
            </div>
            <div class="col-sm-6 col-md-5 col-md-offset-1 site-block visibility-none" data-toggle="animation-appear" data-animation-class="animation-fadeInLeft" data-element-offset="-180">
                <h3 class="h2 site-heading site-heading-promo"><strong>Fully</strong> Responsive on Mobile</h3>
                <p class="promo-content">Glix Schools can be managed on your mobile devices, tablets or even android wear devices. It is fully responsive. </p>
            </div>
        </div>
        <hr>
    </div>
</section>
<!-- END Promo #3 -->

<!-- Testimonials -->
<section class="site-content site-section">
    <div class="container">
        <!-- Testimonials Carousel -->
        <div id="testimonials-carousel" class="carousel slide carousel-html" data-ride="carousel" data-interval="4000">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#testimonials-carousel" data-slide-to="0" class="active"></li>
                <li data-target="#testimonials-carousel" data-slide-to="1"></li>
                <li data-target="#testimonials-carousel" data-slide-to="2"></li>
            </ol>
            <!-- END Indicators -->

            <!-- Wrapper for slides -->
            <div class="carousel-inner text-center">
                <div class="active item">
                    <p>
                        <img src="img/placeholders/avatars/avatar12.jpg" alt="Avatar" class="img-circle">
                    </p>
                    <blockquote class="no-symbol">
                        <p>Thanks so much, i used this for my final year project, and it was great!</p>
                        <footer><strong>Oladele Micheal</strong></footer>
                    </blockquote>
                </div>
                <div class="item">
                    <p>
                        <img src="img/placeholders/avatars/avatar7.jpg" alt="Avatar" class="img-circle">
                    </p>
                    <blockquote class="no-symbol">
                        <p>You guys are great. I hope i can get future help if am rewriting the software</p>
                        <footer><strong>Prince D</strong></footer>
                    </blockquote>
                </div>
                <div class="item">
                    <p>
                        <img src="img/placeholders/avatars/avatar9.jpg" alt="Avatar" class="img-circle">
                    </p>
                    <blockquote class="no-symbol">
                        <p>Atlast! I got what i wanted</p>
                        <footer><strong>Hillary Aj</strong></footer>
                    </blockquote>
                </div>
            </div>
            <!-- END Wrapper for slides -->
        </div>
        <!-- END Testimonials Carousel -->
    </div>
</section>
<!-- END Testimonials -->

<!-- Quick Stats -->
<section class="site-content site-section themed-background">
    <div class="container">
        <!-- Stats Row -->
        <!-- CountTo (initialized in js/app.js), for more examples you can check out https://github.com/mhuggins/jquery-countTo -->
        <div class="row" id="counters">
            <div class="col-sm-4">
                <div class="counter site-block">
                    <span data-toggle="countTo" data-to="3200" data-after="+"></span>
                    <small>Scripts Sold</small>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="counter site-block">
                    <span data-toggle="countTo" data-to="3120" data-after="+"></span>
                    <small>Happy Clients</small>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="counter site-block">
                    <span data-toggle="countTo" data-to="160000" data-after="+"></span>
                    <small>Transactions</small>
                </div>
            </div>
        </div>
        <!-- END Stats Row -->
    </div>
</section>
<!-- END Quick Stats -->

<?php include 'inc/page_footer.php'; ?>
<?php include 'inc/template_scripts.php'; ?>
<?php include 'inc/template_end.php'; ?>