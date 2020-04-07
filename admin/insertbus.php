<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
</head>
<body>
<form  method="post" action="insertbus.php">
<br><br><br><br>
    <center><legend> ENTER BUS DETAILS </legend></center> 
    <label><b>BUSNAME</b></label>
    <input type="text" placeholder="Enter bus name" name="e3" id="e3" required>
    <label><b>SOURCE</b></label>
    <input type="text" placeholder="From" name="e4" id="e4" required>
    <label><b>DESTINATION</b></label>
    <input type="text" placeholder="To" name="e5" id="e5" required>
    <label><b>DATE</b></label>
    <input type="date" id="date" name="date" value="yyyy-mm-dd" required="">
    <label><b>DEPARTURE TIME</b></label>
    <input type="time"  name="timed"  required="">
     <label><b>ARRIVAL TIME</b></label>
    <input type="time"  name="timea"  required="">
    <label>COST OF 1 TICKET</label>
    <input type="number" name="price"  required="" >
    <label>DISCOUNT</label>
    <input type="number" name="discount"  required="" >
    <label>NUMBER OF SEATS AVAIABLE</label>
    <input type="number" name="seat" id ="seat" required="" >
    <button type="submit" name="submit">INSERT BUS DETAILS</button>
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
    window.open('insertbus.php','_self');</script>
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
