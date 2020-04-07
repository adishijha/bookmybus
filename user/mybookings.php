<!DOCTYPE html>
<html>
<head>
<title>Buses</title>
</head>
<link href='https://fonts.googleapis.com/css?family=Acme' rel='stylesheet'>
<style>
body {
    font-family: 'Acme';font-size: 40px;
    margin: 0;
background: #000000;

  }
table {
width: 80%;
color: #ffffff;
font-family: monospace;
font-size: 25px;
text-align: center;
}
th {
background-color: #F49F1C;
color: white;
font: 20px;
}
tr:nth-child(even) {background-color:
  color:white;
 #f2f2f2}
</style>
<body>
  <br>
  <div align="center">
    <label style="color: white">YOUR BOOKINGS ARE:</label>
<br><br>
   </div>
<table align="center">
<tr>
<th>RID</th>
<th>SOURCE</th>
<th>DESTINATION</th>
<th>DATE</th>
<th>PHONENO</th>
</tr>
<?php
session_start();
include 'connection.php';
$sql="select * from reservation,user where reservation.phoneno=user.phoneno ORDER BY rid desc";
$result = mysqli_query($con, $sql);
    if (mysqli_num_rows($result) > 0) 
    {


while($row = mysqli_fetch_assoc($result)) 

  {

  echo "<tr>";

  echo "<td>" . $row['rid'] . "</td>";

  echo "<td>" . $row['source'] . "</td>";

  echo "<td>" . $row['destination'] . "</td>";

  echo "<td>" . $row['date'] . "</td>";
  echo "<td>" . $row['finalamt'] . "</td>";
  echo "</tr>";

  }

echo "</table>";
}
else
{
echo "0 results";
}

?>



  
 