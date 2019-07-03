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
                <i class="fa fa-keys"></i>Unused & Used Pins<br>
            </h1>
        </div>
    </div>
    <ul class="breadcrumb breadcrumb-top">
        <li>Dashboard</li>
        <li><a href="list-of-pins">List of Pins</a></li>
    </ul>
    <!-- END Datatables Header -->

    <!-- Datatables Content -->
    <div class="block full">
        <div class="block-title">
            <h2><strong>Unused & Used Pins</strong> in the Database</h2>
        </div>
        <p><a href="list-of-unused-pins" target="_blank">Unused pins</a> are pins generated by the admin for each student. A pin cannot be use more than ONE registration.</p>
        <a href="#generatepin" class="btn btn-success" data-toggle="modal"> <i class="fa fa-plus-square"></i> <span> Generate new pin</span> </a><br/>

        <div class="table-responsive">
        <div class="btn-group pull-right">
                                  <button class="btn dropdown-toggle" data-toggle="dropdown">Tools <i class="fa fa-angle-down"></i>
                                  </button>
                                  <ul class="dropdown-menu pull-right">
                                      <li><a href="javascript:window.print()">Print</a></li>
                                      <li><a href="#">Save as PDF</a></li>
                                      <li><a href="#">Export to Excel</a></li>
                                  </ul>
                              </div>
            <?php
 $sql=mysql_query("SELECT * FROM regcode WHERE status = 'unused'");
                        $rol = mysql_num_rows($sql);
                        echo '<table  class="display table table-bordered table-striped" id="example-datatable">';
                        echo ' <thead>
                    <tr>
                      <th>S/N</th>
                      <th>Pin</th>
                      <th>Status</th>
                      <th class="hidden-phone">Action</th>
                    </tr>

                  </thead>';
                    while($appost=mysql_fetch_assoc($sql))
                    {
                        $id = $appost['id'];
                         $code = $appost['code'];
                          $status = $appost['status'];
                           
                        echo '<tr class="tabler1"><td>'.$id.'</td><td>'.$code.' </td><td><button class="btn btn-primary"><i class="fa fa-lock"></i> '.$status.'</button></i></td><td><a href="delport.php?id='.$appost['id'].'" class="delbutton" title="Click To Delete"><button type="button" class="btn btn-danger btn-icon"> Delete <i class="fa fa-times"></i> </button></a></td></tr>';
          
                    }
          
          
          echo '          
          </table>      ';
      
       
       ?> 
        </div>
    </div>
    <!-- Regular Modal 2 -->
                <div id="generatepin" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h3 class="modal-title">Generate New Registration Pin</h3>
                            </div>
                            <div class="modal-body">
                                Please be extra careful when generating pins. As it is very sensitive. You generate <b>20</b> pins at a go. To increase the number of pins
to generate, kindly contact your admin  for possible solutions.
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Close</button>
                                <a href="auto.php?idpin=pin" type="button" class="btn btn-sm btn-primary" title="You can only generate 20 at once">Generate Pin</button></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END Regular Modal 2 -->
    <!-- END Datatables Content -->
</div>
<!-- END Page Content -->

<?php include 'inc/page_footer.php'; ?>
<?php include 'inc/template_scripts.php'; ?>

<!-- Load and execute javascript code used only in this page -->
<script src="js/pages/tablesDatatables.js"></script>
<script>$(function(){ TablesDatatables.init(); });</script>

<?php include 'inc/template_end.php'; ?>