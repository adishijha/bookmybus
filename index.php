<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

body {font-family:"Lucida Sans Unicode", "Lucida Grande", sans-serif;}

.image-container {
  background-image: url("frontimage.jpeg");
  background-size: cover;
  position: relative;
  height: 900px;
}

.text {
  background-color:white;
  color: black;
  font-size: 6vw; 
 
  font-weight: bold;
  margin: 0 auto;
  padding: 10px;
  width: 50%;
  text-align: center;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  mix-blend-mode: screen;
}

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
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
</head>
<body>



<div class="image-container">
<div class="topnav">
  <a class="active" href="#home">HOME</a>
  <a href="contact.html">CONTACT</a>
  <a href="aboutus.html">ABOUT</a>
  <a href="signup.php">SIGN UP</a>
  <a href="login.php">LOGIN</a>
</div>

<div style="padding-left:16px">
  <div class="text">BOOK MY BUS</div>
</div>
</body>
</html>


<?php
session_start();
include 'connection.php';
if(isset($_POST['login']))
{
    header("location: login.php");

}
else if(isset($_POST['signup']))
{
     header('location: signup.php');
}
?>