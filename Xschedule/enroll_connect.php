<?php
session_start();

$connection=mysqli_connect("localhost","root","","register");
if(isset($_POST['enrollbtn']))
{
  $student=$_POST['e_id'];
  $subject=$_POST["en_subject"];
  $day = $_POST['en_day'];
  $time = $_POST['en_time'];

  $query = $connection->query("select*from scheduleform where student='$student' and subject='$subject' ");
  $data =mysqli_fetch_array($query);
  $num=mysqli_num_rows($query);

  if($data['subject']=="$subject" &&$data['student']=="$student"){
  $error = "Subject aready exist in Schedule";
  $_SESSION["error"] = $error;
  header('location:user_enrollment.php');


  }else{

    $query = $connection->query("select*from scheduleform where student='$student' and day='$day' and time='$time' ");
    $data =mysqli_fetch_array($query);
    $num=mysqli_num_rows($query);

    if($data['day']=="$day" &&$data['time']=="$time" &&$data['student']=="$student"){
      $error = "Subject time clash with other subject";
      $_SESSION["error"] = $error;
      header('location:user_enrollment.php');
  }else{

    $query="INSERT INTO scheduleform (student,subject,day,time) VALUES('$student','$subject','$day','$time')";
    $query_run=mysqli_query($connection,$query);
    if($query_run)
    {
      $error = "Subject added ";
      $_SESSION["error"] = $error;
      header("location:user_enrollment.php");
    }
    else
    {
      header("location:user_enrollment.php");
    }

  }


}
}
?>
