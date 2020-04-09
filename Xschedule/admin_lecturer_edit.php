<?php
include('include/header.php');
include('include/navbar.php');
include('include/footer.php');
include('include/scripts.php');
?>
                <main>

                    <div class="container-fluid">
                        <h1 class="mt-4">Add/Edit Lecturer info</h1>
                        <?php
                               if(isset($_SESSION["error"])){
                                   $error = $_SESSION["error"];
                                   echo "<h2 style=font-size:20px;color:red;font-family:verdana;><center>$error</center></h2>";
                               }
                           ?>
                        <div class="modal fade" id="lecturer_info" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="Add_lecturer">Add Lecturer info</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                <form action="edit_course_connect.php" method="post" enctype="multipart/form-data">
                                  <div class="form-group">
                                    <label>Upload Image</label>
                                    <input type="file" class="form-control" name="image" id="image" placeholder="" >
                                        </div>
                                        <div class="form-group">
                                          <label>Lecturer name</label>
                                          <input type="lecturer" class="form-control" name="lecturer_name" placeholder="" required>
                                              </div>
                                                    <div class="form-group">
                                                      <label>Lecturer info </label>
                                                      <textarea class="form-control" name="lecturer_info" rows="3"></textarea>
                                                    </div>
                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                          <button type="submit" name="save_lecturer" class="btn btn-primary">Save</button>
                                        </div>
                                </form>
                              </div>

                            </div>
                          </div>
                        </div>


                        <div class="card mb-4">
                            <div class="card-header"><i class="fas fa-table mr-1"></i>Lecturer info  <button type="button"  class="btn btn-primary" data-toggle="modal" data-target="#lecturer_info" style="float: right ; height:50px; width:300px; "  >
                              Add Lecturer info
                            </button></div>


                            <div class="card-body">
                                <div class="table-responsive">
                                  <?php
                                    $connection=mysqli_connect("localhost","root","","register");

                                    $query="SELECT * FROM lecturerform";
                                    $query_run=mysqli_query($connection,$query);

                                  ?>
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th width="120px;">Image</th>
                                                <th>Lecturer name</th>
                                                <th width="700px;">Lecturer info</th>
                                                <th  width="240px;">Edit/Delete</th>

                                            </tr>
                                        </thead>

                                        <tbody>
                                          <?php
                                          if(mysqli_num_rows($query_run)>0){
                                            while($row=mysqli_fetch_assoc($query_run))
                                            {
                                              ?>

                                            <tr>
                                                <td><?php echo '<img src="upload/'.$row['image'].'"  height="180px;" width="150px;" alt="image">'?> </td>
                                                <td><?php echo $row['name'];?></td>
                                                <td><?php echo $row['info'] ;?></td>

                                                <td>
                                                  <form action="lecturer_edit.php" method="post">
                                                  <input type="hidden" name="edit_id" value="<?php echo $row['ID'];?>">
                                                  <button type="submit" name="edit_lecturer_btn"class="btn btn-success" style="float: left ; height:38px; width:80px;">Edit</button>
                                                  </form>

                                                  <form action="lecturer_edit_pic.php" method="post">
                                                  <input type="hidden" name="edit_id" value="<?php echo $row['ID'];?>">
                                                  <button type="submit" name="edit_lecturer_pic_btn"class="btn btn-success" style="float: left ; margin-left: 10px; height:38px; width:80px;">Image</button>
                                                </form >
                                                  <form action="edit_course_connect.php" method="post">
                                                  <input type="hidden" name="delete_id" value="<?php echo $row['ID'];?>">

                                                  <button type="submit" name="d_lbtn" class="btn btn-danger" style="float: right ; height:38px; width:80px;">delete</button>
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
