
<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>


    <meta charset="utf-8">
    <title>Xschedule</title>
    <link rel="stylesheet" type="text/css" href="register.css">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>
        <div class="loginbox">
          <h1>Register </h1>

            <form action="connect.php" method="post" >
              <?php
                     if(isset($_SESSION["error"])){
                         $error = $_SESSION["error"];
                         echo "<span style=color:red;><center>$error</center></span>";
                     }
                 ?>
              <p>Student ID</p>
              <i class="fa fa-id-badge cust"></i>
              <input type="text" name="id" placeholder="Enter Student ID" required>
              <p>Password</p>
              <i class="fa fa-key cust"></i>
              <input type="password" name="password" placeholder="Enter Password" required>
              <p>Email</p>
              <i class="fa fa-envelope-o cust"></i>
              <input type="Email" name="email" placeholder="Enter Email" required>
              <p>Phone</p>
              <i class="fa fa-phone cust"></i>
              <select style="background-color: black" name="phonecode" required>
                <option selected hidden value="">Select Code</option>
                <option>Afghanistan  +93</option>
                <option>Albania      +355</option>
                <option>Algeria      +213</option>
                <option>Argentina     +54</option>
                <option>Australia     +61</option>
                <option>Austria       +43</option>
                <option>Bangladesh    +880</option>
                <option>Belarus       +375</option>
                <option>Benin         +229</option>
                <option>Botswana      +267</option>
                <option>Brazil         +55</option>
                <option>Brunei        +673</option>
                <option>Burundi       +257</option>
                <option>Cambodia      +855</option>
                <option>China          +86</option>
                <option>Colombia       +57</option>
                <option>Egypt          +20</option>
                <option>Finland       +358</option>
                <option>France         +33</option>
                <option>Germany        +49</option>
                <option>Greenland     +299</option>
                <option>Hong Kong     +852</option>
                <option>Iceland       +354</option>
                <option>India          +91</option>
                <option>Indonesia      +62</option>
                <option>Iran           +98</option>
                <option>Italy          +39</option>
                <option>Japan	         +81</option>
                <option>Kenya         +254</option>
                <option>Macau         +853</option>
                <option>Malawi        +265</option>
                <option>Malaysia       +60</option>
                <option>Maldives      +960</option>
                <option>Mexico         +52</option>
                <option>Myanmar        +95</option>
                <option>Nepal         +977</option>
                <option>Netherlands    +31</option>
                <option>New Zealand    +64</option>
                <option>North Korea   +850</option>
                <option>Norway         +47</option>
                <option>Philippines    +63</option>
                <option>Peru           +51</option>
                <option>Poland         +48</option>
                <option>Portugal      +351</option>
                <option>Russia          +7</option>
                <option>Spain          +34</option>
                <option>Swaziland     +268</option>
                <option>Taiwan        +886</option>
                <option>Thailand       +66</option>
                <option>Turkey         +90</option>
                <option>United Kingdom +44</option>
                <option>United States   +1</option>
                <option>Vietnam        +84</option>


              </select>
              <input type="Phone" name="phone" placeholder="Phone number" required>
              <input type="hidden" name="usertype" value="user">
              <p>Gender</p>
              <ul>
              <li>
                <input type="radio" id="male" name="gender" value="m" >
                <label for="male">Male</label>

                <div class="check"></div>


              <li>
                <input type="radio" id="female" name="gender" value="f" >
                <label for="female">Female</label>

                <div class="check"><div class="inside"></div></div>

              </li>
              </ul>


              <input type="submit" name="" value="Submit">


            </form>
          </div>
  </body>
</html>
<?php
    unset($_SESSION["error"]);
?>
<?php
