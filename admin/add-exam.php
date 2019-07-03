
<?php
session_start();
require("../db_params.php");
error_reporting(0);
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
    <!-- Blank Header -->
    <div class="content-header">
        <div class="header-section">
            <h1>
                <i class="fa fa-book"></i>Add Exam Title <br><small> Exam title can be Student Subjects.</small>
            </h1>
        </div>
    </div>

<?php

extract($_POST);



echo "<table width=100%>";
echo "<tr><td align=center></table>";
if($submit=='submit' || strlen($subname)>0 )
{
$rs=mysql_query("select * from mst_subject where sub_name='$subname'");
if (mysql_num_rows($rs)>0)
{
    echo "<br>div class=head1>Subject is Already Exists......<a href='subadd.php'>Go Back</a></div>";
    exit;
}
mysql_query("insert into mst_subject(sub_name) values ('$subname')",$cn) or die(mysql_error());
echo "<p align=center>Subject  <b> \"$subname \"</b> Added Successfully.</p>";
$submit="";
}
?>
<SCRIPT LANGUAGE="JavaScript">
function check() {
mt=document.form1.subname.value;
if (mt.length<1) {
alert("Please Enter Subject Name");
document.form1.subname.focus();
return false;
}
return true;
}
</script>

    <ul class="breadcrumb breadcrumb-top">
        <li>Dashboard</li>
        <li>Exam</li>
        <li><a href="">Add Exam Tite </a></li>
    </ul>
    <!-- END Blank Header -->
            <div class="block">
                <!-- Horizontal Form Title -->
                <div class="block-title">
                    <div class="block-options pull-right">
                        <a href="javascript:void(0)" class="btn btn-alt btn-sm btn-default toggle-bordered enable-tooltip" data-toggle="button" title="Toggles .form-bordered class">Edit</a>
                    </div>
                    <h2><strong>Exam Title</strong> Form</h2>
                </div>
                <!-- END Horizontal Form Title -->

                <!-- Horizontal Form Content -->
                <form name="form1" method="post" onSubmit="return check();" class="form-horizontal form-bordered">
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="example-hf-email">Enter Details</label>
                        <div class="col-md-9">
                            <input type="text" id="subname" name="subname" class="form-control" placeholder="Enter Exam Name...">
                            <span class="help-block">Please enter exam title</span>
                        </div>
                    </div>
                    <div class="form-group form-actions">
                        <div class="col-md-9 col-md-offset-3">
                            <button type="submit" name="submit"  value="Add" class="btn btn-sm btn-primary"><i class="fa fa-user"></i> Add</button>
                            <button type="reset" class="btn btn-sm btn-warning"><i class="fa fa-repeat"></i> Reset</button>
                        </div>
                    </div>
                </form>
                <!-- END Horizontal Form Content -->
            </div>
</div>
<!-- END Page Content -->

<?php include 'inc/page_footer.php'; ?>
<?php include 'inc/template_scripts.php'; ?>
<!-- Load and execute javascript code used only in this page -->
<script src="js/pages/uiProgress.js"></script>
<script>$(function(){ UiProgress.init(); });</script>
<?php include 'inc/template_end.php'; ?>