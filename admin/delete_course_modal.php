<!-- modal -->
<div id="delete_course<?php echo $id; ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <div class="alert alert-danger">Please check to be sure again <span style="font-weight:bold; font-size:14px;"> <?php echo $row['surname'].' '.$row['othernames']; ?></span></div>
      </div>
	  <div class="modal-footer">
        <button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-large"></i>&nbsp;Close</button>
        <a class="btn btn-danger" href="dels.php<?php echo '?id='.$id; ?>">Yes</a>
      </div>
    </div>
  </div>
</div>
<!-- modal -->