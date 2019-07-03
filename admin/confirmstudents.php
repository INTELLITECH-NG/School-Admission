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
                <i class="fa fa-users"></i>List of Students <br><small> Here, you can confirm student data here!</small>
            </h1>
        </div>
    </div>
    <ul class="breadcrumb breadcrumb-top">
        <li>Dashboard</li>
        <li><a href="">Student List</a></li>
    </ul>
    <!-- END Datatables Header -->

    <!-- Datatables Content -->
    <div class="block full">
        <div class="block-title">
            <h2><strong>List of </strong> Students</h2>
        </div>

        <div class="table-responsive">
     <table  class="display table table-bordered table-striped" id="example-datatable">
        <thead>
        <?php     
$result= mysql_query("select * from studentreg")or die(mysql_error());
while($row=mysql_fetch_array($result)){
$id=$row['id'];
      ?>
           <tr>
    <th>ID No</th>
      <th>Full Name</th>
      <th>Gender</th>
      <th>Jamb Number</th>
      <th>Photo</th>
      <th>Jamb Score</th>
      <th>Online Status</th>
      <th>Status</th>
      <th>Admssion Status</th>
      <th>Action</th>
    </tr>
    
        </thead>
        
        <tbody>
        
        
        
          <tr>
          
            <td><?php echo $row['id'];?></td>
            <td><?php echo $row['surname'].' '.$row['othernames']; ?></td>
            <td><?php echo $row['gender'];?></td>
            <td><?php echo $row['jamb'];?></td>
            <td><img src="../<?php echo $row['photo']; ?>" class="img-circle" width="60" height="60"></td>
            <td><?php echo $row['total'];?></td>
            <td><a href="#status<?php  echo $id;?>" data-toggle="modal"><?php echo $row['time']; ?></td>
            <td><?php echo $row['status'];?></td>
            <td><?php echo $row['examdate'];?></td>
            <td><a href="#delete_course<?php echo $id; ?>" data-toggle="modal" class="btn btn-danger"><i class="icon-trash icon-large"></i>&nbsp; Delete</a>
            
            <?php include('delete_course_modal.php'); ?>
            
            </td>
            
    
    
    
     <!--- modal -->
       <center>
<div id="status<?php  echo $id;?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Enable / Disable to take Online Exam</h4>
      </div>
<div class="modal-body">
<form class="form-horizontal" method="post" action="sup.php"  enctype="multipart/form-data">
    <input type="hidden" value="<?php echo $row['id']; ?>"  name="UserID" id="inputEmail"  placeholder="Username" required>
        <div class="control-group">
       <label class="control-label" for="input01">Status:</label>
          <div class="controls">
    <select class="span5" type="text" name="Status" >
        <option> </option>
        <option>Active</option>
        <option>Inactive</option>
        <option>Re-Register</option>
     </select>
      </div>
   </div>
                                
</div>
<div class="modal-footer">
        <button type="submit" name="update_status" class="btn btn-warning"><i class="icon-save"></i>Save</button>
        <button data-dismiss="modal" aria-hidden="true" class="btn btn-danger" title="Close to revert to student list"><i class="icon-remove icon-large"></i> Close</a>
      </div>
      </div>
</div>
</div>
</form>
</center>

   <!--- modal -->
    <!-- Modal -->
<div id="<?php  echo $id?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-header">
</div>
<div class="modal-body">
<p><div class="alert alert-danger">Are you Sure you want Delete </p>
</div>
<hr>
<div class="modal-footer">
<button class="btn btn-inverse" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-large"></i> No</button>
<a href="delete_user.php<?php echo '?User_ID='.$id; ?>" class="btn btn-danger"><i class="icon-ok icon-large"></i> Yes</a>
</div>
</div>
   <!--- modal -->
<?php } ?>
    </tr>
  </tbody>
</table>
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