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
    <!-- Forms General Header -->
    <div class="content-header">
        <div class="header-section">
            <h1>
                <i class="gi gi-notes_2"></i>Add Exam Quesitons <br><small>Add any questions to any subjejct </small>
            </h1>
        </div>
    </div>
    <ul class="breadcrumb breadcrumb-top">
        <li>Dashboard</li>
        <li><a href="">Add Questions</a></li>
    </ul>
    <!-- END Forms General Header -->
<?php
extract($_POST);



echo "<h3 class=head1></h3>";
if($_POST[submit]=='Save' || strlen($_POST['testid'])>0 )
{
extract($_POST);
mysql_query("insert into question(test_id,que_desc,studentid,ans1,ans2,ans3,ans4,true_ans) values ('$testid','$addque','$studentid','$ans1','$ans2','$ans3','$ans4','$anstrue')",$cn) or die(mysql_error());
echo "<p align=center>Question Added Successfully.</p>";
unset($_POST);
}
?>
<SCRIPT LANGUAGE="JavaScript">
function check() {
mt=document.form1.addque.value;
if (mt.length<1) {
alert("Please Enter Question");
document.form1.addque.focus();
return false;
}
a11=document.form1.studentid.value;
if(a11.length<1) {
alert("Please Enter Student ID for easy assessment and separation of Questions");
document.form1.studentid.focus();
return false;
}
a1=document.form1.ans1.value;
if(a1.length<1) {
alert("Please Enter Answer1");
document.form1.ans1.focus();
return false;
}
a2=document.form1.ans2.value;
if(a1.length<1) {
alert("Please Enter Answer2");
document.form1.ans2.focus();
return false;
}
a3=document.form1.ans3.value;
if(a3.length<1) {
alert("Please Enter Answer3");
document.form1.ans3.focus();
return false;
}
a4=document.form1.ans4.value;
if(a4.length<1) {
alert("Please Enter Answer4");
document.form1.ans4.focus();
return false;
}
at=document.form1.anstrue.value;
if(at.length<1) {
alert("Please Enter True Answer");
document.form1.anstrue.focus();
return false;
}
return true;
}
</script>

    <div class="row">
        <div class="col-md-6">
            <!-- Basic Form Elements Block -->
            <div class="block">
                <!-- Basic Form Elements Title -->
                <div class="block-title">
                    <h2><strong>New Questions </strong> Form</h2>
                </div>
                <!-- END Form Elements Title -->

                <!-- Basic Form Elements Content -->
                <form name="form1" method="post" onSubmit="return check();" class="form-horizontal form-bordered">

                    <div class="form-group">
                        <label class="col-md-3 control-label" for="example-select">Select Class</label>
                        <div class="col-md-9">
                            <select id="testid" name="testid" class="form-control" size="1">
<?php
$rs=mysql_query("Select * from mst_test order by test_name",$cn);
      while($row=mysql_fetch_array($rs))
{
if($row[0]==$testid)
{
echo "<option value='$row[0]' selected>$row[2]</option>";
}
else
{
echo "<option value='$row[0]'>$row[2]</option>";
}
}
?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="example-text-input">Student ID</label>
                        <div class="col-md-9">
                            <input type="text" name="studentid" type="text" id="studentid" maxlength="45" class="form-control" placeholder="Student ID">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="example-textarea-input">Enter Question</label>
                        <div class="col-md-9">
                            <textarea name="addque" cols="50" rows="2" id="addque" rows="9" class="form-control" placeholder="Enter Question..."></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="example-text-input">Enter Option A</label>
                        <div class="col-md-9">
                            <input type="text" name="ans1" type="text" id="ans1"  maxlength="45" class="form-control" placeholder="Enter Answer 1">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="example-text-input">Enter Option B</label>
                        <div class="col-md-9">
                            <input type="text" name="ans2" type="text" id="ans2" maxlength="45" class="form-control" placeholder="Enter Answer 2">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="example-text-input">Enter Option C</label>
                        <div class="col-md-9">
                            <input type="text" name="ans3" type="text" id="ans3"  maxlength="45" class="form-control" placeholder="Enter Answer 3">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="example-text-input">Enter Option D</label>
                        <div class="col-md-9">
                            <input type="text" name="ans4" type="text" id="ans4"  maxlength="45" class="form-control" placeholder="Enter Answer 4">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="example-text-input">Enter Correct Answer</label>
                        <div class="col-md-9">
                            <input type="text" name="anstrue" type="text" id="anstrue"  maxlength="45" class="form-control" placeholder="Enter Correct Answer">
                        </div>
                    </div>
                    <div class="form-group form-actions">
                        <div class="col-md-9 col-md-offset-3">
                            <button type="submit" name="submit" value="Add" class="btn btn-sm btn-primary"><i class="fa fa-angle-right"></i> Add</button>
                            <button type="reset" class="btn btn-sm btn-warning"><i class="fa fa-repeat"></i> Reset</button>
                        </div>
                    </div>

                </form>
                <!-- END Basic Form Elements Content -->
            </div>
            <!-- END Basic Form Elements Block -->
        </div>
        <div class="col-md-6">
            <!-- Horizontal Form Block -->
            <div class="block">
                <!-- Horizontal Form Title -->
                <div class="block-title">
                    <h2><strong>Suggested </strong>Questions</h2>
                </div>
                <!-- END Horizontal Form Title -->

        <!-- The content you will put inside div.block-content, will be toggled -->
        <div class="block-content">
            <p>You can add controls to a block and make it interactive (test the functionality from the top right block buttons):</p>
            <ul class="fa-ul list-li-push">
                <li> Science Class</li><br/>
                                <?php
                $top1 = $_GET['more1'];
                if ($top1){
                echo '<fieldset style="font-size:12px; padding:3px"><legend style="font-weight:bold"><b>Read More</b></legend>';
                echo '<span style="color:blue;">';
                
                $rs2=mysql_query("Select * from suggest WHERE class='science' and id=$top1");
                 while($row2=mysql_fetch_array($rs2)){
                 echo $q_es = $row2['question'];
                 } echo '    </span></fieldset>';
                 }
                
                 ?>
            
                <span style="font-size:13px"><?php
                $rs11=mysql_query("Select * from suggest WHERE class='science'");
                
                if (mysql_num_rows($rs11) == 0){
                echo '<i>No Suggested Question(s) yet for this Class</i><br><br>';
                }else{
              while($row11=mysql_fetch_array($rs11))
                {
                 $q_id = $row11['id'];
                 $questi = $row11['question'];
                 ?>
                <?php 
                if (strlen($questi)>30){
                echo substr($questi, 0, 10).'...';?> <a href="questionadd.php?more1=<?php echo $q_id; ?>"><span style="color:blue;">More</span> </a>
                <a style="text-decoration:none" href="qdel.php?id=<?php echo $q_id; ?>" title="Click To Delete"><span style="color:red;">**</span></a><hr />
                <?php
                }else{
                echo $questi.'<hr>';
                }
                }
                
                
                }
                ?>

                <li> Art Class</li><br/>
                <?php
                $top2 = $_GET['more2'];
                if ($top2){
                echo '<fieldset style="font-size:12px; padding:3px"><legend style="font-weight:bold"><b>Read More</b></legend>';
                echo '<span style="color:blue;">';
                
                $rs2=mysql_query("Select * from suggest WHERE class='art' and id=$top2");
                 while($row2=mysql_fetch_array($rs2)){
                 echo $q_es = $row2['question'];
                 }echo      ' </span>               </fieldset>';
                }
                 ?>
        
                
                
                <span style="font-size:13px"><?php
                $rs11=mysql_query("Select * from suggest WHERE class='art'");
                
                if (mysql_num_rows($rs11) == 0){
                echo '<i>No Suggested Question(s) yet for this Class</i><br><br>';
                }else{
              while($row11=mysql_fetch_array($rs11))
                {
                 $q_id = $row11['id'];
                 $questi = $row11['question'];
                 ?>
                <?php 
                if (strlen($questi)>30){
                echo substr($questi, 0, 10).'...';?> <a href="questionadd.php?more2=<?php echo $q_id; ?>"><span style="color:blue;">More</span> </a>
                <a style="text-decoration:none" href="qdel.php?id=<?php echo $q_id; ?>" title="Click To Delete"><span style="color:red;">**</span></a><hr />
                <?php
                }else{
                echo $questi.'<hr>';
                }
                }
                
                
                }
                ?>

                <li>Commercial Class</li><br/>
                <?php
                $top = $_GET['more'];
                if ($top){
                echo '<fieldset style="font-size:12px; padding:3px"><legend style="font-weight:bold"><b>Read More</b></legend>';
                echo '<span style="color:blue;">';
                $rs2=mysql_query("Select * from suggest WHERE class='commercial' and id=$top");
                 while($row2=mysql_fetch_array($rs2)){
                 echo $q_es = $row2['question'];
                 }echo '     </span>                </fieldset>';
                 }
                 ?>
            
                
                
                <span style="font-size:13px"><?php
                $rs112=mysql_query("Select * from suggest WHERE class='commercial'");
                
                if (mysql_num_rows($rs112) == 0){
                echo '<i>No Suggested Question(s) yet for this Class</i><br><br>';
                }else{
              while($row11=mysql_fetch_array($rs112))
                {
                 $q_id = $row11['id'];
                 $questi = $row11['question'];
                 ?>
                <?php 
                if (strlen($questi)>30){
                echo substr($questi, 0, 10).'...';?> <a href="questionadd.php?more=<?php echo $q_id; ?>"><span style="color:blue;">More</span> </a>
                <a style="text-decoration:none" href="qdel.php?id=<?php echo $q_id; ?>" title="Click To Delete"><span style="color:red;">**</span></a><hr />
                <?php
                }else{
                echo $questi.'<hr>';
                }
                }
                
                
                }
                ?>
            </ul>
        </div>
        <p class="text-muted">You can suggest questions for any subject of your choice from the Official Home Page</p>
        <!-- END Interactive Content -->

            </div>
            <!-- END Horizontal Form Block -->
      </div>
    </div>
</div>
<!-- END Page Content -->

<?php include 'inc/page_footer.php'; ?>
<?php include 'inc/template_scripts.php'; ?>

<!-- Load and execute javascript code used only in this page -->
<script src="js/pages/formsGeneral.js"></script>
<script>$(function(){ FormsGeneral.init(); });</script>

<?php include 'inc/template_end.php'; ?>