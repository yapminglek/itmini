<?php
include('include/header.php');
include('include/footer.php');
include('include/scripts.php');
?>
<?php
session_start();
?>


<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">

    <a class="navbar-brand" href="admin_home.php">User &nbsp<?php echo $_SESSION["user"];?>
</a>

    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">

            <div class="input-group-append">
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    <ul class="navbar-nav ml-auto">
      <li class="nav-item ">
        <a class="nav-link" href="user_home.php">Home
            </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="user_enrollment.php">Enrollment</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="user_lecturerinfo.php">Lecturer info
        </a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="user_schedule.php">Subject enrolled
          <span class="sr-only">(current)</span>
        </a>
      </li>
    </ul>
  </div>
</form>
<!-- Navbar-->
<ul class="navbar-nav ml-auto ml-md-0">
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">

            <a class="dropdown-item" href="#">Settings</a><a class="dropdown-item" href="#">Activity Log</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="login.php">Logout</a>
        </div>
    </li>
</ul>
</nav>

</div>
                <main>

                    <div class="container-fluid">
                        <h1 class="mt-4">Schedule/Subject enrolled </h1>

                        <?php
                               if(isset($_SESSION["error"])){
                                   $error = $_SESSION["error"];
                                   echo "<h2 style=font-size:20px;color:red;font-family:verdana;><center>$error</center></h2>";
                               }
                           ?>


                        <div class="card mb-4">
                            <div class="card-header"><i class="fas fa-table mr-1"></i><?php echo $_SESSION["user"];?> </div>


                            <div class="card-body">
                                <div class="table-responsive">

                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                      <input type="hidden" name="e_id" value="<?php echo $_SESSION["user"];?>">

                                        <thead>
                                            <tr>
                                                <th>Subject</th>
                                                <th>Day</th>
                                                <th>Time</th>
                                                <th width="80px;">Remove</th>

                                            </tr>
                                        </thead>

                                        <tbody>
                                          <?php
                                            $student=$_SESSION["user"];
                                            $connection=mysqli_connect("localhost","root","","register");
                                            $query="SELECT*FROM scheduleform WHERE student='$student'";
                                            $query_run=mysqli_query($connection,$query);

                                          ?>
                                          <?php
                                          if(mysqli_num_rows($query_run)>0){
                                            while($row=mysqli_fetch_assoc($query_run))
                                            {
                                              ?>


                                            <tr>
                                                <td><?php echo  $row['subject'];?> </td>
                                                <td><?php echo $row['day'];?></td>
                                                <td><?php echo $row['time'] ;?></td>
                                                <td>
                                                <form action="edit_course_connect.php" method="post">
                                                <input type="hidden" name="r_id" value="<?php echo $row['id'];?>">
                                                <button type="submit" name="r_btn" class="btn btn-danger" style="float:right ; height:38px; width:100px;">remove</button>
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
