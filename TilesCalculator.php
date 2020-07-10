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
    <link rel="stylesheet" href="css/TilePage2Css.css">
     <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/Footer.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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

<div class="head col-md-12 col-sm-12">
<figure>
<a href="Tiles/bathroom-cabinet-candles-342800.jpg"></a>
<figcaption><h1 class="wall wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.6s">TILES CALCULATOR</h1></figcaption>
</figure>
</div> 
<br><br>
<div class="size">
<br><br>
<h1 class="wow size2 bounceInUp"><i class="fa fa-calculator" ></i> ESTIMATION OF TILES <i class="fa fa-calculator" ></i></h1>
</div>
<section class="Tiles-Calculator">
 <center>
 <form class="frm wow bounceInUp" data-wow-duration="1s" data-wow-delay="1s">
  <div class="form-group">
  	<P>SELECT APPLIACTION AREA*</P>
    <div class="form-check">
  	<input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
  	<label class="form-check-label" for="exampleRadios1">
    WALL
  	</label>
	</div>
	<div class="form-check">
  	<input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
  	<label class="form-check-label" for="exampleRadios2">
    FLOOR
  	</label>
	</div>
  </div>
  <hr>
  <div class="form-group">
    <label for="tiletype">SELECT TILES*</label>
    <select class="form-control lbl" id="tiletype" required="true">
      <?php
      $sql="SELECT distinct `Name` FROM `by_space` WHERE 1";
      $res=mysqli_query($con,$sql);
      echo '<option disabled selected>SELECT TILES</option>';
      while($row=mysqli_fetch_array($res))
      {
        echo '<option value="'.$row[0].'">'.$row[0].'</option>';
      }
      ?>
    </select>
  </div>
  <hr>
  <div class="form-group">
    <label for="unit">SELECT UNIT*</label>
    <select class="form-control" id="unit" required="true">
      <option disabled="true" selected="">SELECT UNIT</option>
      <option>SQUARE METERS</option>
      <option>SQUARE FEETS</option>
    </select>
  </div>
  <hr>
  <div class="form-group">
    <label for="height">SPECIFY LENGTH OF A TILE*</label>
	<input type="number" class="form-control" id="height" placeholder="HEIGHT" required="true" />  </div>
  <hr>
  <div class="form-group">
    <label for="width">SPECIFY WIDTH OF A TILE*</label>
	<input type="number" class="form-control" id="width" placeholder="WIDTH" required="true" />  </div>
	<hr>
  <div class="form-group">
    <label for="area">SPECIFY AREA*</label>
	<input type="number" class="form-control" id="area" placeholder="AREA" required="true" />  </div>
	<button type="button" class="btn btn-primary" onclick="calculate()">CALCULATE</button>
</form>
</center>
</section>
<br>
<?php
  include('Footer.php');
?>
<script>
	function calculate()
	{
	var area=document.getElementById("area").value;
	var height=document.getElementById("height").value;
	var width=document.getElementById("width").value;
	var tilesArea=height*width;
	var tiles=(area/tilesArea);
	alert("YOU WILL NEED APPROX "+tiles+" NUMBER OF TILES. " +" THANK YOU FOR USING THIS FEATURE :)");
	}
</script>
</body>
</html>
