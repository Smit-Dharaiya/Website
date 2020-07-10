<?php

include('connection.php');
$Tname=$_GET['tname'];
$query="SELECT  Price FROM `by_Space` WHERE `Name`='$Tname' ";
$res=mysqli_query($con,$query);
$row=mysqli_fetch_array($res);
echo 'Old Price : '.$row[0].'';
?>