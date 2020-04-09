<?php
SESSION_start();
include('include/header.php');
include('include/navbar.php');
include('include/footer.php');
include('include/scripts.php');
?>
<main>
<div class="container-fluid">
  <h1 class="mt-4"><center>Edit Lecturer image</center></h1>

  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">


    <div class="modal-body">
      <?php
      $connection=mysqli_connect("localhost","root","","register");
      if(isset($_POST['edit_lecturer_pic_btn']))
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
          <label>Upload Image</label>
          <input type="file" class="form-control" name="image" id="image"  value="<?php echo $_Files['image'];?>" placeholder="">
              </div>

              <div class="modal-footer">

                <button type="button" onclick="location.href='admin_lecturer_edit.php'" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" name="update_lecturerpic_btn" class="btn btn-primary">Update</button>

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
