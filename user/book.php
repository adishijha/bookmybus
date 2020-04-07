<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>

/*the container must be positioned relative:*/
.custom-select {
  position: relative;
  font-family: Arial;
}

.custom-select select {
  display: none; 
  max-height:250px;
  overflow:auto;/*hide original SELECT element:*/
}

.select-selected {
  background-color: DodgerBlue;
}

/*style the arrow inside the select element:*/
.select-selected:after {
  position: absolute;
  content: "";
  top: 14px;
  right: 10px;
  width: 0;
  height: 0;
  border: 6px solid transparent;
  border-color: #fff transparent transparent transparent;
}

/*point the arrow upwards when the select box is open (active):*/
.select-selected.select-arrow-active:after {
  border-color: transparent transparent #fff transparent;
  top: 7px;
}

/*style the items (options), including the selected item:*/
.select-items div,.select-selected {
  color: #ffffff;
  padding: 8px 16px;
  border: 1px solid transparent;
  border-color: transparent transparent rgba(0, 0, 0, 0.1) transparent;
  cursor: pointer;
  user-select: none;
}

/*style items (options):*/
.select-items {
  position: absolute;
  background-color: DodgerBlue;
  top: 100%;
  left: 0;
  right: 0;
  z-index: 99;
}

/*hide the items when the select box is closed:*/
.select-hide {
  display: none;
}

.select-items div:hover, .same-as-selected {
  background-color: rgba(0, 0, 0, 0.1);
}

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.hero-image {
  background-image: url("final.jpg");
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

.container {
  padding: 16px;
}
</style>
</head>

<body>

<div class="hero-image">
<div class="topnav">
  <a   href="logout.php">LOGOUT</a>
   <a   href="mybookings.php">MY BOOKINGS</a>
    <a  href="cancel.php">CANCEL BOOKING</a>
  
  
  
</div>
  <div class="hero-text">
  <div class="w3-container">
  <div class=" w3-large">


  <form action="book.php" method="post" >

  
  <div class="container">
     <div>
  <label><b>SOURCE</b></label>
  </div>  
  <div>
  <input type="text" id="from" name="from" required="">
  </div>
</p>
<p>
     <div>
  <label><b>DESTINATION</b></label>
  </div>  
  <div>
  <input type="text" id="to" name="to" required="">
  </div>
</p>


  <p>
<div>
  <label><b>DATE</b></label>
  </div>  
  <div>
  <input type="date" id="date" name="date" value="yyyy-mm-dd" required="">
  </div>
  </p>
  
  <p>
  <div>
  <label><b>NUMBER OF SEATS</b></label>
  </div> 
  
  <div>
    <input type="number" name="seat" id ="seat" required="" min="1" max="10" >
  </div>
  </p>

<div>
  <p>
  <button class="w3-button w3-round" type="submit" name="submit" style="background-color: #00BFFF" id="submit">Search Buses</button>
  </p>
  </div>
  </div>
</div>
</div>
</form>
</body>
</html>

<?php
include 'connection.php';
session_start();
if(isset($_SESSION['uid']))
  {
   if(isset($_POST['submit']))
  
  {
  $from=$_POST['from'];
  $to=$_POST['to'];
  $date=$_POST['date'];
  $seat=$_POST['seat'];
  
  $sql="select * from bustimetable where source='$from' and destination='$to' and date='$date'";
  $result=mysqli_query($con,$sql);
  $count=mysqli_num_rows($result);
  if($count<1)
  {
    ?>
    <script>alert("We don't serve on that route currently");
    window.open('book.php','_self');</script>
    <?php
  }
  else
  {

    header('location:ticket.php');
    $data=mysqli_fetch_assoc($result);
    $_SESSION['bid']=$data['bid'];
    $_SESSION['source']=$data['source'];
    $_SESSION['destination']=$data['destination'];
    $_SESSION['busname']=$data['busname'];
     $_SESSION['seats']=$data['seats'];
      $_SESSION['date']=$data['date'];
     $_SESSION['time']=$data['time'];
     
     $disc=$data['discount'];
     $_SESSION['cost']=(($data['cost'])*$seat)-((0.01*$disc*$data['cost'])*$seat);
     if(DATEPART(HOUR,(timediff($data['departure'],curtime())))<4)
     {
        $_SESSION['cost']=$_SESSION['cost']+($_SESSION['cost']*0.20);
     }
  }
}}
else
{
  header('location:login.php');
}

?>


