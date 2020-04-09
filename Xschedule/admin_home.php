<?php
include('include/header.php');
include('include/navbar.php');
include('include/footer.php');
include('include/scripts.php');
?>
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Subject enrollment</h1>
                  

                        <div class="card mb-4">
                            <div class="card-header"><i class="fas fa-table mr-1"></i>Subject available </div>
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
