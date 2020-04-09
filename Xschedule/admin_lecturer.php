<?php
include('include/header.php');
include('include/navbar.php');
include('include/footer.php');
include('include/scripts.php');
?>
                <main>

                    <div class="container-fluid">
                        <h1 class="mt-4">Add/Edit Lecturer info</h1>




                        <div class="card mb-4">
                            <div class="card-header"><i class="fas fa-table mr-1"></i>Lecturer info  </div>


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
                                                <th  width="500px;">Lecturer name</th>
                                                <th width="900px;">Lecturer info</th>
                                                <th  width="1px;"></th>

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
