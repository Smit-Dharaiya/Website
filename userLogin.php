<?php
include('connection.php');
$uname=$_GET['uname'];
$upassword=$_GET['upassword'];
$query="SELECT * FROM `users` WHERE `Username`='$uname' and `Password`='$upassword' ";
$res=mysqli_query($con,$query);
if(mysqli_num_rows($res)>0){
$_SESSION['UserName']=$uname;
header('location:projectnav.php');
}
else{
	header("refresh:5;url=Location :login.php");
    echo '<script>alert("Please Enter Correct Details!");</script>';

}
?>