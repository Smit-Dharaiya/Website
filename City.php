<?php

include('connection.php');
$StateId=$_GET['state'];
$query="SELECT  distinct `City` FROM `dealers` WHERE State='$StateId' ";
$res=mysqli_query($con,$query);


echo '<option disabled selected>SELECT CITY</option>';
while($row=mysqli_fetch_array($res))
{
	echo '<option>'; echo $row[0]; echo '</option>';
}

?>