<?php
session_start();
$frm=$_GET['state'];

if($frm == "add-category")
{
	addCategory();
}
else if($frm == "remove-category")
{
	removeCategory();
}
else if($frm == "add-finish")
{
	addFinish();
}
else if($frm == "remove-finish")
{
	removeFinish();
}
else if($frm == "add-user")
{
	addUser();
}
else if($frm == "remove-user")
{
	removeUser();
}
else if($frm == "remove-tile")
{
	removeTiles();
}
else if($frm == "change-price")
{
	changePrice();
}
else if($frm == "change-credentials")
{
	changeCredentials();
}
else if($frm == "change-contact-info")
{
	changeContactInfo();
}
else if($frm == "add-dealer")
{
	addDealer();
}
else if($frm == "remove-dealer")
{
	removeDealer();
}
else if($frm == "remove-tile")
{
	removeTiles();
}
function addCategory()
{
	include('connection.php');
	$fun=$_GET['fun'];
	$a="INSERT INTO `categories`(`Category`) VALUES ('$fun') ";
	$result=mysqli_query($con,$a);
	if($result)
	{	
	header('location:forms.php');
	}
	else
	{
	echo 'something went wrong';
	}

}
function addFinish()
{
	include('connection.php');
	$fun=$_GET['fun'];
	$a="INSERT INTO `finish`(`Finish`) VALUES ('$fun') ";
	$result=mysqli_query($con,$a);	
	if($result)
	{	
	header('location:forms.php');
	}
	else
	{
	echo 'something went wrong';
	}
}

function removeCategory()
{
	include('connection.php');
	$fun=$_GET['fun'];
	$a="DELETE FROM `categories` WHERE `Category`='$fun'";
	$result=mysqli_query($con,$a);	
	if($result)
	{	
	header('location:forms.php');
	}
	else
	{
	echo 'something went wrong';
	}
}

function removeFinish()
{
	include('connection.php');
	$fun=$_GET['fun'];
	$a="DELETE FROM `finish` WHERE `Finish`='$fun'";
	$result=mysqli_query($con,$a);
	if($result)
	{	
	header('location:forms.php');
	}
	else
	{
	echo 'something went wrong';
	}
}

function addUser(){
	include('connection.php');
	$uname=$_GET['uname'];
	$pass=$_GET['pass'];
	$sql="INSERT INTO `admin`(`key`, `value`) VALUES ('$uname','$pass')";
	$result=mysqli_query($con,$sql);
	if($result)
	{	
	header('location:forms.php');
	}
	else
	{
	echo 'something went wrong';
	}
}

function removeUser(){
	include('connection.php');
	$uname=$_GET['uname'];
	$sql="DELETE FROM `admin` WHERE `key`=$uname";
	$result=mysqli_query($con,$sql);
	if($result)
	{	
	header('location:forms.php');
	}
	else
	{
	echo 'something went wrong';
	}
}

function changePrice(){
	include('connection.php');
	$tile=$_GET['tile'];	
	$price=$_GET['newPrice'];

	$sql="UPDATE `by_space` SET `Price`= $price where `Name`='$tile'";
	$result=mysqli_query($con,$sql);
	if($result)
	{	
	header('location:forms.php');
	}
	else
	{
	echo 'something went wrong';
	}
}

function removeTiles()
{
	include('connection.php');
	$tile=$_GET['tile'];
	$sql="DELETE FROM `by_space` WHERE `Name`='$tile'";
	$result=mysqli_query($con,$sql);
	if($result)
	{	
	header('location:forms.php');
	}
	else
	{
	echo 'something went wrong';
	}
}

	function changeContactInfo()
	{
		include('connection.php');
		$fun=$_GET['fun'];

		if($fun == "customer-care-no")
		{
			$Number=$_GET['number'];
			$sql="UPDATE `admin` SET `value`='$Number' WHERE `key`='Customer Care Number'";
			$result=mysqli_query($con,$sql);

		}
		else if ($fun == "email") {
			$Email=$_GET['email'];
			$sql="UPDATE `admin` SET `value`='$Email' WHERE `key`='Email'";
			$result=mysqli_query($con,$sql);
			if($result)
	{	
	header('location:forms.php');
	}
	else
	{
	echo 'something went wrong';
	}
		}
		else if($fun == "address"){
			$Address=$_GET['address'];
			$sql="UPDATE `admin` SET `value`='$Address' WHERE `key`='Address'";
			$result=mysqli_query($con,$sql);
			if($result)
			{	
			header('location:forms.php');
			}
			else
			{
			echo 'something went wrong';
			}
		}
	}
	function addDealer()
	{
		include('connection.php');
		$name=$_GET['name'];
		$contact=$_GET['contact'];
		$email=$_GET['email'];
		$State=$_GET['State'];
		$city=$_GET['city'];
		$address=$_GET['address'];

		$sql="INSERT INTO `dealers`( `Name`, `State`, `City`, `Address`, `Contact`, `Email`) VALUES ('$name','$State','$city','$address','$contact','$email')";
		$result=mysqli_query($con,$sql);
		if($result)
		{	
		header('location:forms.php');
		}
		else
		{
		echo 'something went wrong';
		}
	}
	function removeDealer()
	{
		include('connection.php');
		$city=$_GET['city'];
		$dealer=$_GET['dealer'];

		$sql="DELETE FROM `dealers` WHERE `Name`='$dealer' && `City`='$city'";
		$result=mysqli_query($con,$sql);
		if($result)
		{	
		header('location:forms.php');
		}
		else
		{
		echo 'something went wrong';
		}
	}

	function changeCredentials()
	{
		include('connection.php');
		$fun=$_GET['fun'];

		if($fun == "username")
		{
			$user=$_SESSION['UserName'];
			$newUser=$_GET['user'];
			$sql="UPDATE `admin` SET `key`='$newUser' WHERE `key`='$user'";
			$result=mysqli_query($con,$sql);

		}
		else if($fun == "password")
		{
			$user=$_SESSION['UserName'];
			$pass=$_GET['pass'];
			$sql="UPDATE `admin` SET `value`='$pass' WHERE `key`='$user'";
			$result=mysqli_query($con,$sql);

		}
	}

?>