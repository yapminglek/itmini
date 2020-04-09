<?php
session_start();
  $id=$_POST['id'];
  $password=$_POST['password'];
  $email=$_POST['email'];
  $phonecode=$_POST['phonecode'];
  $phone=$_POST['phone'];
  $gender=$_POST['gender'];
  $usertype=$_POST['usertype'];

  if(!empty($id)|| !empty($password) || !empty($email) || !empty($phonecode) ||
  !empty($phone) || !empty($gender)){
  $host="localhost";
  $dbemail="root";
  $dbpassword="";
  $dbname="register";

  $conn =new mysqli($host,$dbemail,$dbpassword,$dbname);

  if(mysqli_connect_error()) {
    die('Connect Error('. mysqli_connect_error().')'.mysqli_connect_error());

  }else{
    $SELECT ="SELECT email From registerform Where email =? Limit 1";
    $INSERT ="INSERT Into registerform (id,password,email,phonecode,phone,gender,usertype)
        values(?,?,?,?,?,?,?)";

    $stmt =$conn->prepare($SELECT);
    $stmt->bind_param("s",$email);
    $stmt->execute();
    $stmt->bind_result($email);
    $stmt->store_result();
    $rnum=$stmt->num_rows;

    if ($rnum==0)
    {
      $stmt->close();
      $stmt=$conn->prepare($INSERT);
      $stmt->bind_param("sssiiss",$id,$password,$email,$phonecode,$phone,$gender,$usertype);
      $stmt->execute();

      $error = "Account registed ";
      $_SESSION["error"] = $error;
      header('location:login.php');
    }else {
      $error = "Email registered by other ";
      $_SESSION["error"] = $error;
      header("location:register.php?Message=require info");

        }
    $stmt->close();
    $conn->close();
  }


}else{
  echo"All field are required";
  die();
}
 ?>
