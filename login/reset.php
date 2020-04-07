<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.hero-image {
  background-image: url("rest.jpg");
  background-color: #cccccc;
  height: 700px;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}

.hero-text {
  text-align:left;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  color: white;
}



input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 25%;
}

button:hover {
  opacity: 0.8;
}


.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}





.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
    .cancelbtn {
     width: 100%;
  }
  
}
</style>
</head>
<body>

<div class="hero-image">
  <div class="hero-text">
  <div class="w3-container">
  <div class="w3-display-middle w3-large">

<h2>RESET PASSWORD</h2>

<form action="reset.php" method="post">
  <div class="container">
    <label for="phoneno"><b>Phone Number</b></label>
    <input type="text" placeholder="Enter your phone number" name="phoneno" id="phoneno" required="">
	 
	 <label for="opsw"><b>Old Password</b></label>
    <input type="password" placeholder="Enter Old Password" name="opsw" id="opsw" required="" minlength="6">

    <label for="npsw"><b>New Password</b></label>
    <input type="password" placeholder="Enter New Password" name="npsw" id="npsw " required="" minlength="6">
        
    <button type="submit" name="submit" id="submit">Reset</button>
  </div>
  </form></div>
  </div>
  </div>
  <p>
	 <button type="button" ><a href="index.php">HOME</a></button></p>
  </div>
</body></html>
<?php
session_start();
include 'connection.php';
if(isset($_POST['submit']))
{
    $getmn=$_POST['phoneno'];
    $getpass=$_POST['opsw'];
    $getnpass=$_POST['npsw'];
    $passmd5=md5($getnpass);
    $sql1="UPDATE `user` SET `password`='$passmd5' WHERE phoneno='$getmn'";
    $result1=mysqli_query($con,$sql1);
        if($result1==true)
        {
          ?>
      <script>alert ("Password Updated!!!!!!");</script>
         <?php 
         header('location:login.php');

        }
         else
        {
          ?>
      <script>alert ("Credentials are incorrect!!!!!!");
      window.open('reset.php','_self')
    </script>
         <?php
        }
}

?>
