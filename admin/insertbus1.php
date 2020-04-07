<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>BUS BOOKING</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link href='https://fonts.googleapis.com/css?family=Acme' rel='stylesheet'>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <style>
        body {
    font-family: 'Acme';font-size: 14px;
}
        input[type=text], input[type=password], input[type=email],input[type=time],input[type=number],input[type=date] {
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

.cancelbtn {
    padding: 14px 20px;
    background-color: #f44336;
}

.cancelbtn,.signupbtn {
    float: left;
    width: 50%;
}

.container {
    padding: 16px;
}

.clearfix::after {
    content: "";
    clear: both;
    display: table;
}

@media screen and (max-width: 300px) {
    .cancelbtn, .signupbtn {
       width: 100%;
    }
}
.ftr{
            background-color: black;
            padding: 60px 0px 30px 0px;
            margin-top: 20px;
        }
        .ftr address,.ftr a,.ftr p{
            color:#fff;
        }
        .padded{
            padding-right: 30px;padding-left: 30px;
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

.hero-image {
  background-image: url("buse.jpeg");
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
</style>
</head>
<div class="hero-image">
<div class="topnav">
  <a  href="adminrights.php">BACK</a>
 
</div>

<div style="padding-left:16px">
  <div class="hero-text">
  <div class="w3-container">
  <div class="w3-display-middle w3-large">
<form  method="post" action="insertbus1.php">
<br>
  <div class="container">
  <div class="well"> 
    <center><legend><p style="font-size:40px"> ENTER BUS DETAILS </p></legend></center>
    <br><br>
    <div class="row">
     <div class="col-md-6">  
    <label><b>BUSNAME</b></label>
    <input type="text" placeholder="Enter bus name" name="e3" id="e3" required><br>
    <label><b>SOURCE</b></label>
    <input type="text" placeholder="From" name="e4" id="e4" required><br>
    <label><b>DESTINATION</b></label>
    <input type="text" placeholder="To" name="e5" id="e5" required><br>
    <label><b>DATE</b></label>
    <input type="date" id="date" name="date" value="yyyy-mm-dd" min="2019-11-20" required=""><br>
    <label><b>DEPARTURE TIME</b></label>
    <input type="time"  name="timed"  required=""><br>
</div>
    <div class="col-md-6">
     <label><b>ARRIVAL TIME</b></label>
    <input type="time"  name="timea"  required=""><br>
    <label><b>COST OF EACH TICKET</b></label>
    <input type="number" name="price" min="0" required="" ><br>
    <label><b>DISCOUNT</b></label>
    <input type="number" name="discount"  min="0" required="" ><br>
    <label><b>NUMBER OF SEATS AVAIABLE</b></label>
    <input type="number" name="seat" id ="seat" required="" min="30" max="100" ><br>
</div>
</div>
    <button type="submit" name="submit">INSERT BUS DETAILS</button>
</div>
</div>
</form>
<br><br>
</body>
</html>
<?php
session_start();
include 'connection.php';
if(isset($_POST['submit']))
{
    $a=$_POST['e3'];
    $b=$_POST['e4'];
    $c=$_POST['e5'];
    $d=$_POST['date'];
    $e=$_POST['timed'];
    $f=$_POST['timea'];
    $g=$_POST['price'];
    $h=$_POST['discount'];
    $i=$_POST['seat'];
    $sql="INSERT INTO `bustimetable`(`bid`, `busname`, `source`, `destination`, `date`,`departure`, `arrival`, `cost`, `discount`, `seats available`) VALUES (null,'$a','$b','$c','$d','$e','$f','$g','$h','$i')";
    $result=mysqli_query($con,$sql);
    if($result==false)
    {
    	?>
    	<script>alert ("INVALID BUS DETAILS!!!!TRY AGAIN");
    window.open('insertbus1.php','_self');</script>
         <?php
    }
    else
    {    
        	?>
    	<script>alert ("DETAILS INSERTED SUCCESSFULLY!!!!!!");</script>
         <?php 

        }
}

?>
