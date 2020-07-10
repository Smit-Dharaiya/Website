<?php
session_start();
include('connection.php');
$uname=$_GET['Uemail'];
$upassword=$_GET['psw'];
$query="INSERT INTO `users`(`Username`, `Password`) VALUES ('$uname','$upassword')";
$res=mysqli_query($con,$query);
if($res){
$sql="CREATE TABLE `$uname` ( `Id` INT NOT NULL AUTO_INCREMENT , `Name` VARCHAR(100) NOT NULL , `Price` INT(50) NOT NULL , `Quantity` INT(50) NOT NULL , PRIMARY KEY (`Id`))";
$result=mysqli_query($con,$sql);
if($result)
{
header('location:login.php');
}
}
else{
	echo 'Something Went Wrong';
}
?>