<!DOCTYPE html>
<html  lang="en">
<head>
    <meta charset="utf-8">
    <title>SIGNUP</title>
</head>
<style>

body {font-family: Arial, Helvetica, sans-serif;}
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.hero-image {
  background-image: url("log.jpeg");
  background-color: #cccccc;
  height: 900px;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}

.hero-text {
  text-align: left;
  position: absolute;
  top: 50%;
  left: 50%;

  transform: translate(-50%, -50%);
  color: white;
}


body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box}

/* Full-width input fields */
input[type=text], input[type=password],input[type=email] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

button:hover {
  opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
  padding: 14px 20px;
  background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}

/* Add padding to container elements */
.container {
  padding: 16px;
}

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
  .cancelbtn, .signupbtn {
     width: 100%;
  }
}
.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #4CAF50;
  color: white;
}


</style>
<body>
<div class="hero-image">
<div class="topnav">
  <a  href="index.php">HOME</a>
 
</div>

<div style="padding-left:16px">
  <div class="hero-text">
  <div class="w3-container">
  <div class="w3-display-middle w3-large">
<form  method="post" action="signup.php" onsubmit="return validation();">
 
  <div class="container">
  
    <h1>SIGN UP</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>
     <label><b>Username</b></label>
    <input type="text" placeholder="Enter username" name="e3" id="e3" required>
    <label><b>Phone Number</b></label>
    <input type="text" placeholder="Enter Mobile Number" name="e4" id="e4" required maxlength="10">
    <label><b>Email</b></label>
    <input type="email" placeholder="Enter Email" name="e5" id="e5" required>
    <label><b>Password</b></label><br>
    <input type="password" placeholder="Enter Password" name="e6" id="e6" required minlength="6" required maxlength="15">
    <label><b>Confirm Password</b></label>
    <input type="password" placeholder="Repeat Password" name="e7" id="e7" required minlength="6" required >
    <br><br>
    <label>
    <input type="checkbox" checked="checked" style="margin-bottom:15px"> Remember me<br>
</label>
     <p>By creating an account you agree to our <a href="terms.html" style="color:dodgerblue">Terms & Privacy</a>.</p>
  <div class="clearfix">
      <button type="button" class="cancelbtn"><a href="index.php">Cancel</a></button>
      <button type="submit" class="signupbtn" name="submit">Sign Up</button>
    </div>
    
    
  </div>
</form>
</div>
</div>
</div>
</div>
</div>

</body>
</html>

<?php
session_start();
include 'connection.php';
if(isset($_POST['submit']))
{
    $getuser=$_POST['e3'];
    $getmn=$_POST['e4'];
    $getemail=$_POST['e5'];
    $getpass=$_POST['e6'];
    $getrpass=$_POST['e7'];
    if($getpass==$getrpass)
    {
	$sql="select * from user where phoneno='$getmn'";
    $result=mysqli_query($con,$sql);
    $count=mysqli_num_rows($result);
    if($count==1)
    {
    	?>
    	<script>alert ("Already Exists");</script>
         <?php
    }
    else
    {    
       $passmd5=md5($getpass);
       $sql2="INSERT INTO `user`(`name`, `phoneno`, `email`, `password`) VALUES ('$getuser','$getmn','$getemail','$passmd5')";
        $result2=mysqli_query($con,$sql2);
        if($result2==true)
        {
        	?>
    	<script>alert ("you have succesfully registered");</script>
         <?php 
         header('location:book.php');

        }
        else
        {
        	?>
    	<script>alert ("you have not registered");</script>
         <?php
         
         }
    }    
    }
else
{
	?>
    	<script>alert ("Passwords don't match");</script>
     <?php
}

}

?>
