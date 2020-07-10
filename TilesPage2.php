<?php
session_start();
include('connection.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/Footer.css">
    <link rel="stylesheet" href="css/TilePage2Css.css">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" >
    
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


<?php
$data=$_GET['uid'];
$data2=$_GET['uid2'];
$data3=$_GET['uid3'];
  
  if($data == "KITCHEN TILES "){
    echo '<div class="head5 col-md-12 col-sm-12">
   <figure>';
   }

  if($data == "BEDROOM TILES "){
    echo '<div class="head2 col-md-12 col-sm-12">
   <figure>';
   }

  if($data == "BATHROOM TILES "){
    echo '<div class="head3 col-md-12 col-sm-12">
   <figure>';
   }

   if($data == "COMMERCIAL TILES "){
    echo '<div class="head4 col-md-12 col-sm-12">
   <figure>';
   }

   if($data == "LIVING ROOM TILES "){
    echo '<div class="head6 col-md-12 col-sm-12">
   <figure>';
   }

   if($data == "OUTDOOR TILES "){
    echo '<div class="head7 col-md-12 col-sm-12">
   <figure>';
   }

   if($data == "CERAMIC TILES "){
    echo '<div class="head20 col-md-12 col-sm-12">
   <figure>';
   }

   if($data == "FLOOR TILES " || $data2 == "CERAMIC FLOOR TILES "){
    echo '<div class="head8 col-md-12 col-sm-12">
   <figure>';
   }

   if($data == "WALL TILES " || $data2 == "CERAMIC WALL TILES "){
    echo '<div class="head9 col-md-12 col-sm-12">
   <figure>';
   }

    if($data3 == "ECLAT TILES "){
    echo '<div class="head10 col-md-12 col-sm-12">
   <figure>';
   }

    if($data3 == "GLOSSY TILES "){
    echo '<div class="head11 col-md-12 col-sm-12">
   <figure>';
   }

   if($data3 == "MATTE TILES " || $data3 == "SATIN MATTE TILES "){
    echo '<div class="head12 col-md-12 col-sm-12">
   <figure>';
   }

   if($data3 == "LAPATO TILES "){
    echo '<div class="head18 col-md-12 col-sm-12">
   <figure>';
   }

    if($data3 == "RUSTIC TILES "){
    echo '<div class="head19 col-md-12 col-sm-12">
   <figure>';
   }

    if($data2 == "GLAZED VITRIFIED TILES "){
    echo '<div class="head13 col-md-12 col-sm-12">
   <figure>';
   }


    if($data2 == "VITRIFIED ELEVATION TILES "){
    echo '<div class="head14 col-md-12 col-sm-12">
   <figure>';
   }

    if($data2 == "VITRIFIED DCH TILES "){
    echo '<div class="head15 col-md-12 col-sm-12">
   <figure>';
   }

    if($data2 == "VITRIFIED HEAVY DUTY TILES "){
    echo '<div class="head16 col-md-12 col-sm-12">
   <figure>';
   }

   if($data2 == "VITRIFIED SST TILES "){
    echo '<div class="head17 col-md-12 col-sm-12">
   <figure>';
   }




   if($data != "OUTDOOR TILES " && $data != "LIVING ROOM TILES " && $data != "COMMERCIAL TILES " && $data != "BATHROOM TILES " && $data != "BEDROOM TILES " && $data != "KITCHEN TILES " && $data != "FLOOR TILES " && $data != "WALL TILES " && $data != "CERAMIC TILES " && $data3 != "ECLAT TILES " && $data3 != "GLOSSY TILES " && $data3 != "MATTE TILES " && $data3 != "SATIN MATTE TILES " && $data3 != "LAPATO TILES " && $data3 != "RUSTIC TILES " && $data2 != "CERAMIC WALL TILES " && $data2 != "CERAMIC FLOOR TILES " && $data2 != "GLAZED VITRIFIED TILES " && $data2 != "VITRIFIED ELEVATION TILES " && $data2 != "VITRIFIED DCH TILES " && $data2 != "VITRIFIED HEAVY DUTY TILES " && $data2 != "VITRIFIED SST TILES "){
      echo '<div class="head col-md-12 col-sm-12">
      <figure>';
   }

if($data!=' ')
{
echo '<figcaption><h1 class="wall wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.6s">' . $data .'</h1></figcaption>';
}
else if($data2!='')
{
  echo '<figcaption><h1 class="wall wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.6s">' . $data2 .'</h1></figcaption>';
}
else if($data3!=' ')
{
  echo '<figcaption><h1 class="wall wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.6s">' . $data3 .'</h1></figcaption>';
}
?>
</figure>
</div> 
<br>
<center>
<form class="form-inline searchFrm sbutton">
        <input type="text" placeholder="Search.." name="search" class="search" id="search">
        <button type="button" class="search_button" >    <i class="fa fa-search"></i></button>
</form>
</center>



<?php

    $sql1="SELECT `Name`,`Tile_Type`, `Image`, `Size`, `Price` FROM `by_space` where (Tile_Type='$data' or Category='$data2' or Finish='$data3')  and size='800 * 800' " ;
    $res=mysqli_query($con,$sql1);
      if (mysqli_num_rows($res) > 0)
      {
        echo '<div class="size">
        <br>
        <h1 class="wow size1 fadeInLeft"> ---800 <i class="fa fa-times" ></i> 800---</h1>
        </div>';
        echo '<section class="tiles row">
        <div class="col-md-1"></div>
        <div class="col-md-10">';
        while ($row = mysqli_fetch_array( $res)) 
        {  
          $name=$row['Name'];
          $type=$row['Tile_Type'];
          $img=$row['Image'];
          $size=$row['Size'];
          $price=$row['Price'];
          
          // echo '<div class="col-md-10">';
          echo '<a href="TilesPage3.php ? tile='.$name.'&Tile_type='.$type.'">';
          echo '<center><div class="flipImage col-md-3 col-sm-12 '.ucfirst($name).' '.ucfirst($type).' '.ucfirst($price). ' wow bounceInLeft">';
          echo '<div class="ImageBack">';
          echo '<pre>';
          echo '<b><h3><center>TILES DETAIL </center></h3></b>';
          echo '<b>NAME: </b>' . $name .'<br>';
          echo '<b>TYPE: </b>'. $type .'<br>';
          echo '<b>DISCRIPTION: </b>'. $size .'<br>' ;
          echo '<b>PRICE: </b>' . $price . '<br>';
          echo '</pre>';
          echo '</div>';
          echo '<img src="'.$img.'"><br>';
          echo '<div class="cart"><i class="fa fa-shopping-cart cart2 aria-hidden="true"></i> <input type="button" class="btn-primary" onclick="addToCart('.$name.')" value="'.$name.'" style="color:black;">';
          echo ' </div></center>';
          echo '</a>';

    }
    echo '</div>';
    echo '<div class="col-md-1"></div></section>';
  }

  
    $sql2="SELECT `Name`,`Tile_Type`, `Image`, `Size`, `Price` FROM `by_space` where (Tile_Type='$data' or Category='$data2') and size='600 * 600' " ;
    $res=mysqli_query($con,$sql2);
      if (mysqli_num_rows($res) > 0)
      {
        echo '<div class="size">
        <h1 class="wow size1 fadeInLeft"> ---600 <i class="fa fa-times" ></i> 600---</h1>
        </div>';
        echo '<section class="tiles row">
        <div class="col-md-1"></div>
        <div class="col-md-10">';
        while ($row = mysqli_fetch_array($res)) 
        {  

          $name=$row['Name'];
          $type=$row['Tile_Type'];
          $img=$row['Image'];
          $size=$row['Size'];
          $price=$row['Price'];
          
          // echo '<div class="col-md-10">';
           echo '<a href="TilesPage3.php ? tile='.$name.'&Tile_type='.$type.'">';
          echo '<center><div class="flipImage col-md-3 col-sm-12 '.ucfirst($name).' '.ucfirst($type).' '.ucfirst($price). ' wow bounceInLeft">';
          echo '<div class="ImageBack">';
          echo '<pre>';
          echo '<b><h3><center>TILES DETAIL </center></h3></b>';
          echo '<b>NAME: </b>' . $name .'<br>';
          echo '<b>TYPE: </b>'. $type .'<br>';
          echo '<b>DISCRIPTION: </b>'. $size .'<br>' ;
          echo '<b>PRICE: </b>' . $price . '<br>';
          echo '</pre>';
          echo '</div>';
          echo '<img src="'.$img.'">';
          echo '<div class="cart"><i class="fa fa-shopping-cart cart2 aria-hidden="true"></i> <input type="button" class="btn-primary" value="'.$name.'">';
          echo ' </div></center>';
          echo '</a>';
    }
    echo '</div>';
    echo '<div class="col-md-1"></div></section>';
  }

  include('Footer.php');
?>
<script>
  $(document).ready(function(){
    $(".flipImage").show();
  });
  
  $(".search_button").click(function(){
    var value;
    value=document.getElementById('search').value;

    if(value!="")
    {
    $(".flipImage").hide();
    $("."+value).show();
    }
    else
    {
     $(".flipImage").show(); 
    }

  });
</script>

</body>
</html>