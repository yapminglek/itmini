<?php
session_start();
?>

</<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Xschedule</title>
    <link rel="stylesheet" type="text/css" href="mystyle.css">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>

    <div class="loginbox">
    <img src="pic/logo.png" class="center">
        <h1>Login </h1>
        <form action="" method="POST">
          <?php
                 if(isset($_SESSION["error"])){
                     $error = $_SESSION["error"];
                     echo "<span style=color:red;><center>$error</center></span>";

                 }
             ?>
            <p>Email</p>
            <i class="fa fa-id-badge cust"></i>
            <input type="text" style="background-color: black" name="email" placeholder="Enter Email">
            <p>Password</p>
            <i class="fa fa-key cust"></i>
            <input type="password" name="password" placeholder="Enter Password">
            <input type="submit" name="Login" value="Login">
            <input type="hidden" name="1" value="<?php echo $_SESSION["user"];?>">


            <a href="">Forget password?</a>
            <a href="register.php">Don't have an account?</a>

        </form>
  </body>
</html>
<?php
    unset($_SESSION["error"]);
?>
<?php

$conn=mysqli_connect("localhost","root","","register")or die(mysqli_errno());

if(isset($_POST['Login'])){
  if (empty($_POST['email']) || empty($_POST['password'])) {
    $error = "Fill in all the blank";
    $_SESSION["error"] = $error;
    header("location:login.php?Message=require info");


  }
  else{
  $email=$_POST['email'];
  $password=$_POST['password'];
  $error = "Invalid account";

  $query = $conn->query("select*from registerform where email='$email'and password='$password'");
  $data =mysqli_fetch_array($query);
  $num=mysqli_num_rows($query);

  if($data['usertype']=="admin" &&$data['email']=="$email" &&$data['password']=="$password"){
    $_SESSION['admin']=$data['id'];
    header('location:admin_home.php');
  }elseif($data['usertype']=="user"&&$data['email']=="$email" &&$data['password']=="$password"){
    $_SESSION['user']=$data['id'];

    header('location:user_home.php');
  }else{
    $_SESSION["error"] = $error;
    header("location:login.php?Message=invalid account");



  }
}

}

?>
