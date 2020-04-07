
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link href='https://fonts.googleapis.com/css?family=Acme' rel='stylesheet'>
<style>
body {
    font-family: 'Acme';font-size: 30px;
    margin: 0;
    align-content: center;
    margin-right: auto;
    margin-left: auto;
}
table{
font-family: 'Acme';font-size: 20px;
border-collapse:collapse;
}
table,td,th
{
  border:2px white;
}
th
{
  background-color: #ffffff;
  height:50px;
}
td
{
  background-color: #7FFFD4;
}.button {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 5px 10px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
.hero-image {
  background-image: url("wal.jpg");
  background-color: #cccccc;
  height: 600px;
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
td
{
  background-color: #7FFFD4;
  color: #000000;
}

</style>
</head>
<body >
<div class="hero-image">
<div class="topnav">
  <a  class="active" href="book.php">BACK</a>
  
  
  
</div>
  <div class="hero-text">
  <div class="w3-container">
  <div class="w3-display-middle w3-large">

<form  method="post" action="cancel.php">
<div align="center">
  
    <th>ENTER RESERVATION ID</th>
    <td><input type="text" name="id" placeholder="Enter reservation ID" required=""></td>
    <td colspan="2"><input type="submit" name="submit" value="Search" class="button"></td>
    <input type="hidden" name="varname" value="$_POST['id']" >
  
</div>
</form>
 <div style="overflow-x:auto;"> 
<table align="center" width="100%" border="1" style="margin-top:20px">
  <tr style="background-color: black">
   <th>SOURCE</th>
    <th>DESTINATION</th>
    <th>DATE</th>
    <th>DELETE</th>
  </tr>
<?php
session_start();
include 'connection.php';
if(isset($_POST['submit']))
{
   $d=$_POST['id'];
   $_SESSION['cancel']=$d;
   //$res=mysqli_query($con,"create view vn as SELECT * FROM reservation WHERE rid='$data'");
   //$run=mysqli_query($con,"SELECT * FROM vn");
   $res1=mysqli_query($con,"SELECT * FROM res_view");
   $sql="SELECT * FROM reservation WHERE rid='$d'";
  $run=mysqli_query($con,$sql);
  $data=mysqli_fetch_assoc($run);
  ?>
  <tr align="center">
  
   <td><?php echo $data['source'];?></td>
    <td><?php echo $data['destination'];?></td>
    <td><?php echo $data['date'];?></td>
    <td><a href="makecancel.php?rid=<?php echo $d?>">DELETE...</a></td>
  </tr>
<?php

  
}
?>
</div>
</div>
</body>
</html>

