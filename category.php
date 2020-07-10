<?php
include('connection.php');
    $var=$_GET['state'];
    if($var == "finish")
    {   
	$a="SELECT * FROM `finish` WHERE 1";
	$res=mysqli_query($con,$a);
    echo '<option disabled selected>SELECT FINISH</option>';
    while($row=mysqli_fetch_array($res))
    {
    	echo '<option>'; echo $row[0]; echo '</option>';
    }
    }
    else if($var == "category")
     {
       $a="SELECT * FROM `categories` WHERE 1";
        $res=mysqli_query($con,$a);
        echo '<option disabled selected>SELECT CATEGORY</option>';
        while($row=mysqli_fetch_array($res))
        {
            echo '<option>'; echo $row[0]; echo '</option>';
        }
     }   
?>