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
      <li class="nav-item active " >
        <a class="nav-link" href="user_lecturerinfo.php">Lecturer info
          <span class="sr-only">(current)</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="user_schedule.php">Subject enrolled</a>
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
                        <h1 class="mt-4">Lecturer info</h1>




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
