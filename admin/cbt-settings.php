<?php
session_start();
error_reporting(0);



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
    <!-- Datatables Header -->
    <div class="content-header">
        <div class="header-section">
            <h1>
                <i class="fa fa-desktop"></i>CBT Question Setting<br><small> Here, you can see all the questions available in the database! Please edi wisely</small>
            </h1>
        </div>
    </div>
    <ul class="breadcrumb breadcrumb-top">
        <li>Dashboard</li>
        <li><a href="">CBT Question Setting</a></li>
    </ul>
    <!-- END Datatables Header -->

    <!-- Datatables Content -->
    <div class="block full">
        <div class="block-title">
            <h2><strong>CBT Questions</strong> Settings</h2>
        </div>
<a href="addquestions" class="btn btn-success"> <i class="fa fa-plus-square"></i> <span> Add CBT Questions</span> </a><br/>
        <div class="table-responsive">
            <?php
$sqdel = mysql_query("SELECT * FROM question");
 $nrow = mysql_num_rows($sqdel);
 echo '<table id="example-datatable" class="table table-vcenter table-condensed table-bordered">
                <thead>
                    <tr>
                        <th class="text-center">Qst</th>
                        <th class="text-center">A</th>
                        <th class="text-center">B</th>
                        <th>C</th>
                        <th>D</th>
                        <th>Answer</th>
                        <th class="text-center">Actions</th>
                    </tr>
                </thead>';

while($rowdel=mysql_fetch_array($sqdel)){
$q_idt = $rowdel['que_id'];
$qst = $rowdel['que_desc'];
$ans1 = $rowdel['ans1'];
$ans2 = $rowdel['ans2'];
$ans3 = $rowdel['ans3'];
$ans4 = $rowdel['ans4'];
$ts = $rowdel['true_ans'];
if ($ts == 1){
$tr1 = 'A';
}elseif ($ts==2){
$tr1 = 'B';
}elseif ($ts==3){
$tr1 = 'C';
}else{
$tr1 = 'D';
}

echo '<tbody>   <tr>
                        <td class="text-center">'.$qst.'</td>
                        <td class="text-center">'.$ans1.'</td>
                        <td class="text-center">'.$ans2.'</td>
                        <td class="text-center">'.$ans3.'</td>
                        <td>'.$ans4.'</td>
                        <td>'.$tr1.'</td>
                        <td class="text-center">
                            <div class="btn-group">
                                <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                <a href="quedel.php?delid='. $q_idt.'" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                            </div>
                        </td>
                    </tr>';
                }
echo'</table>';
?>
        </div>
    </div>
    <!-- END Datatables Content -->
</div>
<!-- END Page Content -->

<?php include 'inc/page_footer.php'; ?>
<?php include 'inc/template_scripts.php'; ?>

<!-- Load and execute javascript code used only in this page -->
<script src="js/pages/tablesDatatables.js"></script>
<script>$(function(){ TablesDatatables.init(); });</script>

<?php include 'inc/template_end.php'; ?>