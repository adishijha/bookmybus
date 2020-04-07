<?php
session_start();
include 'connection.php';
    $a=$_POST['e3'];
    $b=$_POST['e4'];
    $c=$_POST['e5'];
    $d=$_POST['date'];
    $e=$_POST['timed'];
    $f=$_POST['timea'];
    $g=$_POST['price'];
    $h=$_POST['discount'];
    $i=$_POST['bid'];
    $sql="UPDATE `bustimetable` SET `busname`='$a',`source`='$b',`destination`='$c',`date`='$d',`departure`='$e',`arrival`='$f',`cost`='$g',`discount`='$h',`seats available`='50' WHERE bid='$i'";
    $result=mysqli_query($con,$sql);
    if($result==true)
    {
    	?>
    	<script>alert ("DETAILS UPDATED SUCCESSFULLY!!!!!!");
    	window.open('adminrights.php','_self');
    </script>
 
         <?php
 
    }

?>
