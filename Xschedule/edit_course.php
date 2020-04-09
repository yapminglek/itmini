<?php
include('include/header.php');
include('include/navbar.php');
include('include/footer.php');
include('include/scripts.php');
?>

          <main>

                    <div class="container-fluid">
                        <h1 class="mt-4">Add/Edit Subject</h1>

                  <?php
                         if(isset($_SESSION["error"])){
                             $error = $_SESSION["error"];
                             echo "<h2 style=font-size:20px;color:red;font-family:verdana;><center>$error</center></h2>";
                         }
                     ?>

                        <div class="modal fade" id="addsubject" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="Add_subject">Add subject</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                <form action="edit_course_connect.php" method="post">
                                  <div class="form-group">
                                    <label>Subject</label>
                                    <input type="subject" class="form-control" name="subject" placeholder="" required>
                                        </div>
                                  <div class="form-group">
                                    <label>Lecturer</label>
                                    <input type="lecturer" class="form-control" name="lecturer" placeholder="" required>
                                        </div>
                                        <div class="form-group">
                                          <label>Select day</label>
                                          <select class="form-control" name="day" required>
                                            <option value="Monday"> Monday</option>
                                            <option value="Tuesday">Tuesday</option>
                                            <option value="Wednesday">Wednesday</option>
                                            <option value="Thursday">Thursday</option>
                                            <option value="Friday">Friday</option>
                                          </select>
                                        </div>
                                        <div class="form-group">
                                          <label>Select time</label>
                                          <select class="form-control" name="time" required>
                                            <option value="9.00-11.00am">9.00-11.00am</option>
                                            <option value="1.00-3.00pm">1.00-3.00pm</option>
                                            <option value="3.00-5.00pm">3.00-5.00pm</option>
                                          </select>
                                        </div>
                                        <div class="form-group">
                                          <label>Subject fee</label>
                                          <input type="fee" class="form-control" name="fee" placeholder="RM" required>
                                              </div>
                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                          <button type="submit" name="addbtn" class="btn btn-primary">Add</button>
                                        </div>
                                </form>
                              </div>

                            </div>
                          </div>
                        </div>

                        <div class="card mb-4">
                            <div class="card-header"><i class="fas fa-table mr-1"></i>Subject available <button type="button"  class="btn btn-primary" data-toggle="modal" data-target="#addsubject" style="float: right ; height:50px; width:300px; "  >
                              Add subject
                            </button></div>


                            <div class="card-body">
                                <div class="table-responsive">
                                  <?php
                                    $connection=mysqli_connect("localhost","root","","register");

                                    $query="SELECT * FROM subjectform";
                                    $query_run=mysqli_query($connection,$query);

                                  ?>
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Subject</th>
                                                <th>Lecturer</th>
                                                <th>Day</th>
                                                <th>Time</th>
                                                <th>Subject fee</th>
                                                <th>Edit/Delete</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                          <?php
                                          if(mysqli_num_rows($query_run)>0){
                                            while($row=mysqli_fetch_assoc($query_run))
                                            {
                                              ?>

                                            <tr>
                                                <td><?php echo $row['subject'];?></td>
                                                <td><?php echo $row['lecturer'];?></td>
                                                <td><?php echo $row['day'];?></td>
                                                <td><?php echo $row['time'];?></td>
                                                <td><?php echo $row['fee'];?></td>
                                                <td>
                                                  <form action="subject_edit.php" method="post">
                                                  <input type="hidden" name="edit_id" value="<?php echo $row['id'];?>">
                                                  <button type="submit" name="editbtn" class="btn btn-primary" style="float: left ; height:38px; width:80px;">Edit</button>
                                                  </form>
                                                  <form action="edit_course_connect.php" method="post">
                                                  <input type="hidden" name="delete_id" value="<?php echo $row['id'];?>">
                                                  <button type="submit" name="d_btn" class="btn btn-danger" style="float: right ; height:38px; width:80px;">delete</button>
                                                  </form>
                                                </td>
                                            </tr>
                                            <?php
                                              }
                                            }
                                            else{echo "No record found";
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>

<?php
    unset($_SESSION["error"]);
?>
<?php
