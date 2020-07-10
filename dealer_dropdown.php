<?php

include('connection.php');
$CityId=$_GET['city'];
$query="SELECT  `Name` FROM `dealers` WHERE `City`='$CityId' ";
$res=mysqli_query($con,$query);


echo '<option disabled selected>SELECT NAME</option>';
while($row=mysqli_fetch_array($res))
{
echo '<option value="'.$row[0].'">'; echo $row[0]; echo '</option>';
}

?>
