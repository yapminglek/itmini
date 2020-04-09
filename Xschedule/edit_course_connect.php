<?php
session_start();
$connection=mysqli_connect("localhost","root","","register");

if(isset($_POST['addbtn']))
{
  $subject = $_POST['subject'];
  $lecturer = $_POST['lecturer'];
  $day = $_POST['day'];
  $time = $_POST['time'];
  $fee = $_POST['fee'];

  $query="INSERT INTO subjectform (subject,lecturer,day,time,fee) VALUES('$subject','$lecturer','$day','$time','$fee')";
  $query_run=mysqli_query($connection,$query);

  if($query_run)
  {
    $error = "Subject added";
    $_SESSION["error"] = $error;
    header('location:edit_course.php');
  }
  else{
    $error = "Subject not added";
    $_SESSION["error"] = $error;
    header('location:edit_course.php');
  }
}


if(isset($_POST['d_btn'])){

  $id=$_POST['delete_id'];
  $query="DELETE FROM subjectform WHERE id='$id'";
  $query_run=mysqli_query($connection,$query);
  if($query_run)
  {
    $error = "Subject deleted";
    $_SESSION["error"] = $error;
    header("location:edit_course.php");
  }
  else
  {
    $error = "Subject deleted";

    header("location:edit_course.php");
  }
}

if(isset($_POST['updatebtn'])){

  $id=$_POST['edit_id'];
  $subject = $_POST['e_subject'];
  $lecturer = $_POST['e_lecturer'];
  $day = $_POST['e_day'];
  $time = $_POST['e_time'];
  $fee = $_POST['e_fee'];

  $query="UPDATE subjectform SET subject='$subject',lecturer='$lecturer',day='$day',time='$time',fee='$fee' WHERE id='$id'";
  $query_run=mysqli_query($connection,$query);

  if($query_run)
  {
    $error = "Subject updated";
    $_SESSION["error"] = $error;
    header("location:edit_course.php");
  }
  else
  {
    header("location:edit_course.php");
  }
}

if(isset($_POST['save_lecturer']))
{
  $image = $_FILES['image']['name'];
  $name= $_POST['lecturer_name'];
  $info = $_POST['lecturer_info'];

  if(file_exists("upload/".$_FILES["image"]["name"]))
  {
    $store=$_FILES["image"]["name"];
    $error = "image already exists ";
    $_SESSION["error"] = $error;
        header('location:admin_lecturer_edit.php');
  }
  else
  {
    $query="INSERT INTO lecturerform (image,name,info) VALUES('$image','$name','$info')";

    $query_run=mysqli_query($connection,$query);

    if($query_run)
    {
      move_uploaded_file($_FILES["image"]["tmp_name"],"upload/".$_FILES["image"]["name"]);
      $error = "Added ";
      $_SESSION["error"] = $error;
      header('location:admin_lecturer_edit.php');
    }
    else{
      $error = "Not added ";
      $_SESSION["error"] = $error;

      header('location:admin_lecturer_edit.php');
    }
  }
}


if(isset($_POST['update_lecturer_btn']))
{
  $id=$_POST['edit_id'];
  $e_lecturer_name = $_POST['e_lecturer_name'];
  $e_lecturer_info = $_POST['e_lecturer_info'];


  $query="UPDATE lecturerform SET name='$e_lecturer_name',info='$e_lecturer_info ' WHERE ID='$id'";
  $query_run=mysqli_query($connection,$query);

  if($query_run)
  {
    $error = "Updated ";
    $_SESSION["error"] = $error;
    header('location:admin_lecturer_edit.php');
  }
  else{
    header('location:admin_lecturer_edit.php');
  }
}


if(isset($_POST['update_lecturerpic_btn']))
{
  $id=$_POST['edit_id'];
  $e_image = $_FILES['image']['name'];



  $query="UPDATE lecturerform SET image='$e_image'  WHERE ID='$id'";
  $query_run=mysqli_query($connection,$query);

  if($query_run)
  {
    move_uploaded_file($_FILES["image"]["tmp_name"],"upload/".$_FILES["image"]["name"]);
    header('location:admin_lecturer_edit.php');
  }
  else{
    header('location:admin_lecturer_edit.php');
  }
}


if(isset($_POST['d_lbtn'])){

  $id=$_POST['delete_id'];
  $query="DELETE FROM lecturerform WHERE ID='$id'";
  $query_run=mysqli_query($connection,$query);
  if($query_run)
  {
    $error = "Deleted ";
    $_SESSION["error"] = $error;
    header("location:admin_lecturer_edit.php");
  }
  else
  {
    $error = "Fail te delete ";
    $_SESSION["error"] = $error;
    header("location:admin_lecturer_edit.php");
  }
}


if(isset($_POST['r_btn'])){

  $id=$_POST['r_id'];
  $query="DELETE FROM scheduleform WHERE id='$id'";
  $query_run=mysqli_query($connection,$query);
  if($query_run)
  {
    $error = "Subject removed ";
    $_SESSION["error"] = $error;
    header("location:user_schedule.php");
  }
  else
  {
    $error = "Subject not removed ";
    $_SESSION["error"] = $error;
    header("location:user_schedule.php");
  }
}

?>
