
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link href='https://fonts.googleapis.com/css?family=Acme' rel='stylesheet'>
<style>
body {
    font-family: Arial, Helvetica, sans-serif;
    margin: 0;
    align-content: center;
    margin-right: auto;
    margin-left: auto;
}
.hero-image {
  background-image: url("wal.jpg");
  background-color: #cccccc;
  height: 900px;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}

.hero-text {
  text-size :large;
  text-align:left;
  position: absolute;
  top: 40%;
  left: 50%;
  transform: translate(-50%, -50%);
  color: white;
}
td
{
  background-color:white;
  color: #000000;
}
table{

border-collapse:collapse;
}
th, td {
  text-align: center;
  padding: 8px;
}

table,td,th
{

  border:1px solid black;
}
td
{
  background-color:white;
}
tr
{
  font: white;
  }
  .button {
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
  <a  href="adminrights.php">BACK</a>
  
  
</div>
  <div class="hero-text">
  <div class="w3-container">
  <div class="w3-display-middle w3-large">
<form  method="post" action="deletebus.php" style="background-color : black">
<div align="center">
  
    <th><b>ENTER BUS ID</b></th>
    <td><input type="text" name="id" placeholder="Enter bus ID" required=""></td>
    <td colspan="2"><input type="submit" name="submit" value="Search" class="button"></td>
</div>
</form>
 <div style="overflow-x:auto;"> 
<table align="center" width="80%" border="1" style="margin-top:20px">
  <tr style="background-color : black"> 
    <th>BUSNAME</th>
    <th>SOURCE</th>
    <th>DESTINATION</th>
    <th>DATE</th>
    <th>DEPARTURE</th>
    <th>ARRIVAL</th>
    <th>COST</th>
    <th>DISCOUNT</th>
    <th>DELETE</th>
  </tr>
  <?php
session_start();
include 'connection.php';
if(isset($_POST['submit']))
{
   $data=$_POST['id'];
   $sql="SELECT * FROM bustimetable WHERE bid='$data'";
   $run=mysqli_query($con,$sql);
   if(mysqli_num_rows($run)<1)
{
  echo "<tr><td colspan='9'>NO RECORD FOUND</td></tr>";
}
else
{
  $data=mysqli_fetch_assoc($run);
  ?>
  <tr align="center">
  
    <td><?php echo $data['busname'];?></td>
    <td><?php echo $data['source'];?></td>
    <td><?php echo $data['destination'];?></td>
    <td><?php echo $data['date'];?></td>
    <td><?php echo $data['departure'];?></td>
    <td><?php echo $data['arrival'];?></td>
    <td><?php echo $data['cost'];?></td>
    <td><?php echo $data['discount'];?></td>
    <td><a href="makedelete.php?bid=<?php echo $data['bid']?>">DELETE</a></td>
  </tr>
<?php
}
  
}
?>

  
</div>
</div>
</div>
</body>
</html>

