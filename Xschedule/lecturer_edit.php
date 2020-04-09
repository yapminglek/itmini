<?php
SESSION_start();
include('include/header.php');
include('include/navbar.php');
include('include/footer.php');
include('include/scripts.php');
?>
<main>
<div class="container-fluid">
  <h1 class="mt-4"><center>Add/Edit Lecturer info</center></h1>

  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">


    <div class="modal-body">
      <?php
      $connection=mysqli_connect("localhost","root","","register");
      if(isset($_POST['edit_lecturer_btn']))
      {
        $id=$_POST['edit_id'];
        $query="SELECT*FROM lecturerform WHERE ID='$id'";
        $query_run=mysqli_query($connection,$query);

        foreach($query_run as $row)
        {
          ?>
        <form action="edit_course_connect.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="edit_id" value="<?php echo $row['ID'];?>">

              <div class="form-group">
                <label>Lecturer name</label>
                <input type="lecturer" class="form-control" name="e_lecturer_name"  value="<?php echo $row['name'];?>" placeholder="" required>
                    </div>
                          <div class="form-group">
                            <label>Lecturer info </label>
                            <input type="text" class="form-control" name="e_lecturer_info" rows="3" value="<?php echo $row['info'];?>" >
                          </div>
              <div class="modal-footer">

                <button type="button" onclick="location.href='admin_lecturer_edit.php'" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" name="update_lecturer_btn" class="btn btn-primary">Update</button>

              </div>
            </form>
              <?php
            }
          }
              ?>
    </div>
  </div>
</div>
</div>
</div>
</main>
