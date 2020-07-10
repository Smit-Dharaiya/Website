<?php
session_start();
include('connection.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<title></title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/header.css">
   <link rel="stylesheet" href="css/page3Css.css">

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
<?php
$TileType=$_GET['Tile_type'];
echo '<div class="head col-md-12 col-sm-12">
<figure>
<figcaption class="wa wow fadeInDown">'.strtoupper($TileType).'</h1></figcaption>
</figure>
</div> 
  <div class="row">
  <div class="col-md-2"></div>
  <div class="col-md-10">
    
  <div class="left wow bounceInLeft col-sm-12 col-md-5">
  <center><div  id="Home" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#Home" data-slide-to="0" class="active"></li>
    <li data-target="#Home" data-slide-to="1"></li>
    <li data-target="#Home" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
    <img src="Tiles/carousel3.jpg" alt="Tiles">
    </div>
    <div class="carousel-item">
     <img src="Tiles/carousel5.jpg" alt="Chicago">
    </div>
    <div class="carousel-item">
     <img src="Tiles/carousel4.jpg" alt="Chicago">
    </div>
  		<a class="carousel-control-prev" href="#Home" data-slide="prev">
   		<span class="carousel-control-prev-icon" style="height: 40px; width:30px; background-color: black;"></span>
  		</a>
  		<a class="carousel-control-next" href="#Home" data-slide="next">
    	<span class="carousel-control-next-icon" style="height:40px; width:30px; background-color: black;"></span>
  		</a>
</div>
</center>
</div>';

$TileName=$_GET['tile'];
$sql="SELECT  `Image`, `Tile_Type`, `Category`, `Finish`, `Size`, `Price` FROM `by_space` WHERE Name='$TileName'";
$res=mysqli_query($con,$sql);
$row=mysqli_fetch_array($res);

echo '<center><div class="col-md-5 col-sm-12 wow bounceInRight details">
<h1><center>'.$TileName.'</center></h1>';

echo '<p class="discription"></p>

<pre class="dd" >   <b> TILE TYPE    : </b>'.strtoupper($row[1]).' </pre><br>
<pre class="dd" >   <b> CATEGORY  : </b>'.$row[2].' </pre><br>
<pre class="dd" >   <b> FINISH          : </b>'.$row[3].' </pre><br>
<pre class="dd" >   <b> SIZE              : </b>'.$row[4].' </pre><br>
<pre class="dd" >   <b> PRICE           : </b><span id="price">'.$row[5].'</span> </pre><br>';

echo '<div class="cart"><button onclick="addToCart(this.value)" value="'.$TileName.'" class="btn-primary">Add To Cart</button></div>';
echo '<div class="box"><p class="nbox">20 Pieces per Box *</p>
 <div class="numbers">Enter No. of boxes : <input type="number" name="quantity" id="quantity" placeholder="0"></div></div>';

echo '</div></center>
</div>
</div>';
  include('Footer.php');
?>
<script>
  function addToCart(val)
  {
    var price=document.getElementById("price").innerHTML;
    var qty=document.getElementById("quantity").value;
    alert("in the js");
    if(qty != 0)
    {
      alert("Product Added To Your Cart");
      window.location = "addToCart.php?tile=" + val + "&qty="+qty + "&price="+price ;
    }
    else
    {
      alert("Please Enter Quantity");
    }
  }
</script>
</body>
</html>