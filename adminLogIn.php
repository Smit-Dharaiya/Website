<?php
session_start();
include('connection.php');
$aname=$_GET['aname'];
$apassword=$_GET['apassword'];
$query="SELECT * FROM `admin` WHERE `key`='$aname' and `value`='$apassword' ";
$res=mysqli_query($con,$query);
if(mysqli_num_rows($res)>0){
$_SESSION['UserName']=$aname;
header('location:Projectnav.php');
}
else{
	header("refresh:5;url=Location :login.php");
    echo '<script>alert("Please Enter Correct Details!");</script>';

}
?>