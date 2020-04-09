<?php
session_start();
?>
<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">

    <a class="navbar-brand" href="admin_home.php">Admin &nbsp<?php echo $_SESSION["admin"];?></a>

    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">

            <div class="input-group-append">
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="admin_home.php">Enrollment
            </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="edit_course.php">Edit course</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="admin_lecturer.php">Lecturer info</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="admin_lecturer_edit.php">Edit Lecturer info</a>
      </li>
    </ul>
  </div>


    </form>

    <ul class="navbar-nav ml-auto ml-md-0">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
              <a class="dropdown-item" href="login.php">Logout</a>

            </div>
        </li>
    </ul>
</nav>
