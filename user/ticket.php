<?php
include 'connection.php';
session_start();
if(isset($_SESSION['uid']))
  {
   if(isset($_POST['submit']))
  {
  	$imagename=$_FILES['pic']['name'];
  	$tempimgname=$_FILES['pic']['tmp_name'];
     move_uploaded_file($tempimgname,"images/$imagename");
     $_SESSION['img']=$imagename;
     header('location:payment.php');
   
  }}

else
{
	header('location:login.php');
}
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.w3-btn {margin-bottom:10px;}

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.hero-image {
  background-image: url("ticket wall.jpg");
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
  top: 40%;
  left: 20%;
  transform: translate(-50%, -50%);
  color: white;
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
  <a  href="logout.php">LOGOUT</a>
  

   
  
</div>
  
 <h2 class="w3-xxxlarge" align="center"><font  size="large" color="white" ><b>TICKET DETAILS</b></h2>
  <div class="hero-text">
  <div class="w3-container">
  <div class="w3-display-middle w3-large">

	
	
 
  <form action="ticket.php" method="post" enctype="multipart/form-data">
 
  
  
<div>
  <p>
    <label class="w3-large"><b>BUS ID</b></label>
	<div class="w3-container w3-border w3-white w3-small">
    <label class="w3-large"><?php echo $_SESSION['bid']?></label>
	</p>
	</div>
	
	<div>
  <p>
    <label class="w3-large"><b>BUS NAME</b></label>
	<div class="w3-container w3-border w3-white w3-small">
    <label class="w3-large"><?php echo $_SESSION['busname']?></label>
	</p>
	</div>
	</div>
	
	<div>
  <p>
    <label class="w3-large"><b>PRICE</b></label>
	<div class="w3-container w3-border w3-white w3-small">
    <label class="w3-large"><?php echo $_SESSION['cost']?></label>
	</p>
	</div>
	</div>
	
	<div>
  <p>
    <label class="w3-large"><b>EMAIL ID</b></label>
	<div class="w3-container w3-border w3-white w3-small">
    <label class="w3-large" ><?php echo $_SESSION['uid']?></label>
	</p>
	</div>
	</div>

	
	<div>
	<p>
	 <button class="w3-button w3-round w3-small" id="bta" style="background-color:#7CFC00" type="submit" name="submit" value="submit"><font color="black"><b>CONFIRM BOOKING</b></font></button>
	 <script>
    var btn = document.getElementById('bta');
    btn.addEventListener('click', function() {
      document.location.href = 'payment.php';
    });
  </script>
	 </p>
	 </div>
	 <div>
	
	 <button class="w3-button w3-round w3-small" id="btb" style="background-color:#7CFC00"type="submit" name="cancel" value="cancel"><font color="black"><b>CANCEL</b></font></button>
	 <script>
    var btn = document.getElementById('btb');
    btn.addEventListener('click', function() {
      document.location.href = 'book.php';
    });
  </script>
	
	 </div>

</form>
</div>
</div>

</body>
</html>



