

  
   <!DOCTYPE html>

<html><head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.hero-image {
  background-image: url("log.jpeg");
  background-color: #cccccc;
  height: 700px;
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
  width: 100%;
}

button:hover {
  opacity: 0.8;
}


.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}



.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 20%;
  border-radius: 30%;
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

<div class="hero-image">
<div class="topnav">
  <a  href="index.php">HOME</a>
 
</div>

<div style="padding-left:16px">
  <div class="hero-text">
  <div class="w3-container">
  <div class="w3-display-middle w3-large">

<h2>ADMIN LOGIN</h2>

<form action="admin.php" method="post">
  <div class="imgcontainer">
    <img src="lome.png" alt="Avatar" class="avatar">
  </div>

  <div class="container">
     <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required="">

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required="">
        
    <button type="submit" name="submit" id="submit">LOGIN</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  
  </div>

  
    
    
  </form></div>
  </div>
  </div>
  
  </div>
  
  
</div>

</body></html>
<?php
session_start();

include 'connection.php';

  
   if(isset($_POST['submit']))
  {
  $getname=$_POST['uname'];
  $getpass=$_POST['psw'];
  $_SESSION['aid']=$_POST['uname'];
  if ( $getname=="admin" and $getpass=="admin123$")
  {
    header('location:adminrights.php');
  }
  else
  {
    ?>
    <script>alert("Invalid User");</script>
    <?php
  }
}
?>