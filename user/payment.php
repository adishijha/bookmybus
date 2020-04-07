<?php
session_start();
include 'connection.php';
if(isset($_SESSION['uid']))
  {
$source=$_SESSION['source'];
$destination=$_SESSION['destination'];
$seats=$_SESSION['seats'];
$date=$_SESSION['date'];
$time=$_SESSION['time'];
$cost=$_SESSION['cost'];
$img=$_SESSION['img'];
$phoneno=$_SESSION['phoneno'];
$sql1="INSERT INTO `reservation`(`rid`, `source`, `destination`, `seats`, `date`, `time`, `finalamt`, `image`, `phoneno`) VALUES (null,'$source','$destination','$seats','$date','$time',$cost,'$img','$phoneno')";
$result1=mysqli_query($con,$sql1);
$sql2="INSERT INTO `payment`(`pid`, `phoneno`, `amount`) VALUES (null,'$phoneno',$cost)";
$result1=mysqli_query($con,$sql2);
}
//Set useful variables for paypal form
$paypal_link = 'https://www.sandbox.paypal.com/cgi-bin/webscr'; //Test PayPal API URL
$paypal_username = 'adishiritwickjha@gmail.com'; //Business Email
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Paypal :: SPACE-O </title>
<style>
    .hero-image {
  background-image: url("cash.jpg");
  background-color: #cccccc;
  height: 900px;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}

    input {
  display: block;
  margin-left: auto;
  margin-right: auto;
}
    </style>
</head>
<body>
    <div class="hero-image">
    <form action="<?php echo $paypal_link; ?>" method="post">

        <!-- Identify your business so that you can collect the payments. -->
        <input type="hidden" name="business" value="<?php echo $paypal_username; ?>">
        
        <!-- Specify a Buy Now button. -->
        <input type="hidden" name="cmd" value="_xclick">
        
        <!-- Specify details about the item that buyers will purchase. -->
        <input type="hidden" name="amount" value="<?php echo $_SESSION['cost']; ?>">
        <input type="hidden" name="currency_code" value="INR">
        
        <!-- Specify URLs -->
		<input type='hidden' name='return' value='http://localhost/paypal_success.php'>

        
        <!-- Display the payment button. -->
        <div text-align="center">
        <input type="image" name="submit" border="0" width="200px" height="100px"
        src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif" alt="PayPal - The safer, easier way to pay online">
        <img alt="" border="0" width="10" height="10" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
    </div>
    
    </form>
</div>
</body>
</html>



