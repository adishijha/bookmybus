<?php
session_start();
include 'connection.php';
    $i=$_POST['varname'];
    $sql="DELETE FROM `reservation` WHERE rid='$i'";
    $result=mysqli_query($con,$sql);
    if($result==true)
    {
    	?>
    	<script>alert ("RESERVATION DELETED SUCCESSFULLY!!!!!!");
    	window.open('book.php','_self');
    </script>
 
         <?php
 
    }

?>
