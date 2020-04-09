<?php
SESSION_start();
include('include/header.php');
include('include/navbar.php');
include('include/footer.php');
include('include/scripts.php');
?>
<main>

    <div class="container-fluid">
        <h1 class="mt-4"><center>Edit Subject</center></h1>

        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">


        <div class="modal-body">
          <?php
          $connection=mysqli_connect("localhost","root","","register");
          if(isset($_POST['editbtn']))
          {
            $id=$_POST['edit_id'];
            $query="SELECT*FROM subjectform WHERE id='$id'";
            $query_run=mysqli_query($connection,$query);

            foreach($query_run as $row)
            {
              ?>
            <form action="edit_course_connect.php" method="post">
            <input type="hidden" name="edit_id" value="<?php echo $row['id'];?>">

            <div class="form-group">
              <label>Subject</label>
              <input type="subject" class="form-control" value="<?php echo $row['subject']?>" name="e_subject" placeholder="" required>
                  </div>
            <div class="form-group">
              <label>Lecturer</label>
              <input type="lecturer" class="form-control" value="<?php echo $row['lecturer']?>" name="e_lecturer" placeholder="" required>
                  </div>
                  <div class="form-group">
                    <label>Select day</label>
                    <select class="form-control" value="<?php echo $row['day']?>" name="e_day" >
                      <option value="Monday"> Monday</option>
                      <option value="Tuesday">Tuesday</option>
                      <option value="Wednesday">Wednesday</option>
                      <option value="Thursday">Thursday</option>
                      <option value="Friday">Friday</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Select time</label>
                    <select class="form-control" value="<?php echo $row['time']?>" name="e_time" >
                      <option value="9.00-11.00am">9.00-11.00am</option>
                      <option value="1.00-3.00pm">1.00-3.00pm</option>
                      <option value="3.00-5.00pm">3.00-5.00pm</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Subject fee</label>
                    <input type="fee" class="form-control" value="<?php echo $row['fee']?>" name="e_fee" placeholder="RM" required>
                        </div>
                  <div class="modal-footer">

                    <button type="button" onclick="location.href='edit_course.php'" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" name="updatebtn" class="btn btn-primary">Update</button>

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
