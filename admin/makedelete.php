<?php
session_start();
include 'connection.php';
   $i=$_REQUEST['bid'];
    $sql="DELETE FROM `bustimetable` WHERE bid='$i'";
    $result=mysqli_query($con,$sql);
    if($result==true)
    {
    	?>
    	<script>alert ("BUS ROUTE DELETED SUCCESSFULLY!!!!!!");
    	window.open('adminrights.php','_self');
    </script>
 
         <?php
 
    }

?>
