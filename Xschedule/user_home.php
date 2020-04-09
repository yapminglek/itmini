<?php
include('include/header.php');

include('include/footer.php');
include('include/scripts.php');
?>
<?php
session_start();
?>
<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">

    <a class="navbar-brand" href="user_home.php">User &nbsp<?php echo $_SESSION["user"];?>
</a>

    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">

            <div class="input-group-append">
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="user_home.php">Home
              <span class="sr-only">(current)</span>
            </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="user_enrollment.php">Enrollment</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="user_lecturerinfo.php">Lecturer info</a>
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

            <a class="dropdown-item" href="login.php">Logout</a>
        </div>
    </li>
</ul>
</nav>
<header>
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
      <!-- Slide One - Set the background image for this slide in the line below -->
      <div class="carousel-item active" style="background-image: url('pic/home_pic1.jpg')">
        <div class="carousel-caption d-none d-md-block">
          <h1 class="display-1">Xschedule</h1>
          <p class="lead">HELP UNIVERSITY</p>
        </div>
      </div>
      <!-- Slide Two - Set the background image for this slide in the line below -->
      <div class="carousel-item" style="background-image: url('pic/home_pic2.jpg')">
        <div class="carousel-caption d-none d-md-block">
          <h3 class="display-1">Xschedule</h3>
          <p class="lead">HELP UNIVERSITY</p>
        </div>
      </div>
      <!-- Slide Three - Set the background image for this slide in the line below -->
      <div class="carousel-item" style="background-image: url('pic/home_pic3.jpg')">
        <div class="carousel-caption d-none d-md-block">
          <h3 class="display-1">Xschedule</h3>
          <p class="lead">HELP UNIVERSITY</p>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
  </div>
</header>

<section class="py-5">
  <div class="container">
    <h1 class="font-weight-light"> HELP UNIVERSITY
</h1>
    <p class="lead">HELP is a leader in higher education and professionaltraining in Asia Pacific and internationally. Its high academicstarndards are recognized by partners around the glode. HELP is a pioneerin twinning programs with foreignuniversities in the world. It is strong in programmes lke Business,Accounting and Finance, Economics, Engineering, IT, Psychology,Communication, Economic Crime Management and Humanities. Is also offersmasters and doctoral programmes through its ELM Graduate School.</a>!</p>
  </div>
</section>


<footer id="sticky-footer" class="py-4 bg-dark text-white-50">
   <div class="container text-center">
     <small>Copyright &copy;Xschedule</small>
   </div>
 </footer>
</html>
