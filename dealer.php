<?php
session_start();
include('connection.php');
include('extra.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/DealerCss.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/Footer.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" >
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" ></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" ></script>
    <!-- Jquery -->
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

    <script src="js/wow.min.js"></script>
              <script>
              new WOW().init();
              </script>

</head>
<body>
<?php
	include('header.php');
?>
<div class="headd col-md-12 col-sm-12">
<!-- <a href="Tiles/dealers.jpg"></a> -->
</div>
<br>
<?php
$data=$_GET['u'];
   echo '<figcaption><h1 class="wall wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.6s">' . $data .'</h1></figcaption>';
?>
<form method="POST">
  <div class="row  dealer">
    <div class="col-md-2"></div>
   <div class="col-md-8 col-sm-12">
    <?php
        $temp=getDropdownState();
        $i=0;
        echo '<div class="col-md-5  col-sm-6 dealer1">
        Select State: <select name="state" id="CityDropdown" onchange="getcity(this.value)">';
         while($i<count($temp))
         {
            echo '<option id="opt" class="opt" value="'.$temp[$i].'">'.$temp[$i].'</option>';
            $i++;
         }
        echo '</select>';
  ?>
      </div>
      <div class="col-md-4 col-sm-6  dealer1">
     Select city :  <select name="city" id="city-list" >
                       <option>All City</option>
                     </select>    
      </div>
    <div class="search">
      <button type="submit" name="Search">SEARCH</button>
    </div>
    </div>
    <div class="col-md-2"></div>
  </div>
</form>
<script> 
  
    function getcity(val)
   {
    var x=val; 
    var xmlhttp=new XMLHttpRequest ();
    xmlhttp.open("GET","City.php ? state="+x,false);
    xmlhttp.send(null);
    document.getElementById("city-list").innerHTML=xmlhttp.responseText;
  }
  
</script>
<?php
 
    
  if(isset($_POST['Search']) && isset($_POST['state']))
  {
    $state=$_POST['state'];
    $city=$_POST['city'];
    if($city=="All City"){  
      $res=mysqli_query($con,"SELECT `id`, `Name`, `State`, `City`, `Address`, `Contact`, `Email` FROM `dealers` WHERE State='$state'"); 
      echo '<script>alert("");</script>'; 
    }
    else{
       $res=mysqli_query($con,"SELECT `id`, `Name`, `State`, `City`, `Address`, `Contact`, `Email` FROM `dealers` WHERE State='$state' and City='$city'");
     }
  echo '<div class="row">';
  echo '<div class="col-md-1"></div>
  <div class="col-md-10 ">';
    if(mysqli_num_rows($res)>0)
    {
    while($row=mysqli_fetch_array($res)) {
    $name=$row['Name'];
    $stat=$row['State'];
    $address=$row['Address'];
    $cty=$row['City'];
    $contact=$row['Contact'];
    $email=$row['Email'];
    echo '<div class="col-md-3 col-sm-12 wow bounceInLeft add">
      <center><p class="dname">'.$name.'.</p>
      <p>'.$address.' '.$cty.' '.$stat.'</p>
     <p><i class="fa fa-phone"></i>'.$contact.'</p>
     <p><i class="fa fa-envelope-o"></i>'.$email.'</p>
      </center>
    </div>';
    }
    }
    else
    {
      echo '<center>No Dealers Available At This Location.</center>';
    }
  }
else
{
      echo '<center>Click <b>Search</b> To Find The Dealers</center>';
}

echo '<div class="col-md-1"></div>
</div>
</div><br><br><br><br>';
?>
<?php
	include('Footer.php');
?>

</body>
</html>