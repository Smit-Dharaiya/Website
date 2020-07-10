<?php
session_start();
include('connection.php');
if(isset($_SESSION['UserName']))
{
$user=$_SESSION['UserName'];
$tile=$_GET['tile'];
$quantity=$_GET['qty'];
$price=$_GET['price'];

$sql="INSERT INTO `$user`(`Name`, `Price`, `Quantity`) VALUES ('$tile','$price','$quantity')";
$res=mysqli_query($con,$sql);
if($res)
{
	header('location:javascript://history.go(-1)');
}
else
{
	header('location:javascript://history.go(-1)');
}
}

else
{
	echo '<script>alert("You Have to Log in first To use The cart");<script>';
}
?>