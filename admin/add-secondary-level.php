<?php
session_start();
error_reporting(1);
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
                <i class="fa fa-book"></i>Add Secondary Level<br><small> Secondary Level can be updated by adding Student class, Total Questions!</small>
            </h1>
        </div>
    </div>

    <?php
require("../db_params.php");


if($_POST[submit]=='Save' || strlen($_POST['subid'])>0 )
{
extract($_POST);
mysql_query("insert into mst_test(sub_id,test_name,total_que) values ('$subid','$testname','$totque')",$cn) or die(mysql_error());
echo "<strong>Test </strong><b>\"$testname\"</b> Added Successfully.</p>";
unset($_POST);
}
?>
<SCRIPT LANGUAGE="JavaScript">
function check() {
mt=document.form1.testname.value;
if (mt.length<1) {
alert("Please Enter Test Name");
document.form1.testname.focus();
return false;
}
tt=document.form1.totque.value;
if(tt.length<1) {
alert("Please Enter Total Question");
document.form1.totque.value;
return false;
}
return true;
}
</script>

    <ul class="breadcrumb breadcrumb-top">
        <li>Dashboard</li>
        <li>Examination</li>
        <li><a href="">Add Secondary Level</a></li>
    </ul>
    <!-- END Blank Header -->
            <div class="block">
                <!-- Horizontal Form Title -->
                <div class="block-title">
                    <div class="block-options pull-right">
                        <a href="javascript:void(0)" class="btn btn-alt btn-sm btn-default toggle-bordered enable-tooltip" data-toggle="button" title="Toggles .form-bordered class">Edit</a>
                    </div>
                    <h2><strong>Add Secondary</strong> Form</h2>
                </div>
                <!-- END Horizontal Form Title -->

                <!-- Horizontal Form Content -->
                <form name="form1" method="post" onSubmit="return check();" class="form-horizontal form-bordered">
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="example-hf-email">Select Exam Title</label>
                        <div class="col-md-9">
                            <select id="subname" name="subid" class="form-control" >
                            <?php
$rs=mysql_query("Select * from mst_subject order by  sub_name",$cn);
      while($row=mysql_fetch_array($rs))
{
if($row[0]==$subid)
{
echo "<option value='$row[0]' selected>$row[1]</option>";
}
else
{
echo "<option value='$row[0]'>$row[1]</option>";
}
}
?>
                            </select>
                        </div>
                    </div>
              <div class="form-group">
                        <label class="col-md-3 control-label" for="example-hf-email">Enter Student Class</label>
                        <div class="col-md-9">
                            <input type="text" name="testname" id="testname" name="subid" class="form-control" required parsley-minlength="6" placeholder="Student Class..." >
                        </div>
                    </div>

              <div class="form-group">
                        <label class="col-md-3 control-label" for="example-hf-email">Enter Total Question</label>
                        <div class="col-md-9">
                            <input type="text" name="totque" id="totque" name="subid" class="form-control" required parsley-minlength="6" placeholder="Enter Total Questions..." >
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