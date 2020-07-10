<?php
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/internCss.css">
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

  <section id="Home" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#Home" data-slide-to="0" class="active"></li>
    <li data-target="#Home" data-slide-to="1"></li>
    <!-- <li data-target="#Home" data-slide-to="2"></li> -->
  </ul>

  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
    <img src="Tiles/india2.jpg" alt="Tiles">
    <div class="carousel-caption">
    <h1 class="wow fadeInDown" data-wow-duration="2s" data-wow-delay="0.5s"><b>CERAMIX DIGITAL TILES</b></h1>
    <h3 class="wow fadeInDown" data-wow-duration="2s" data-wow-delay="0.5s">EXEMPLAR OF AN IDEA FLOORING </h3>
    <h5 class="wow fadeInDown" data-wow-duration="2s" data-wow-delay="0.5s">ATTAINED FROM THE BLEND OF CERAMICS AND PURE ELEMENTS,INSPIRED BY THE 
    AMALGAM OF NATURAL WOOD, ELEGENCE OF MARBEL AND DURABILITY OF STONE </h5>
    </div>
    </div>
    <div class="carousel-item">
     <img src="Tiles/india.jpg" alt="Chicago">
     <div class="carousel-caption">
     <h1 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="1s"><b>ELEVATION WALL TILES</b></h1>
     <h3 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="1s">ONE WILL ALWAYS BE AT HOME WITH NATURE </h3>
     <h5 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="1s">WAY UP IN THE MOUNTAINS, IN THE HEART OF NATURE, LIE UNDISCOVERED TEXTURES AND NATURAL PATTERNS</h5>
     </div>
    </div>
     
  	</div>

  <!-- Left and right controls -->
  		<a class="carousel-control-prev" href="#Home" data-slide="prev">
   		<span class="carousel-control-prev-icon" style="height: 40px; width:30px; background-color: black;"></span>
  		</a>
  		<a class="carousel-control-next" href="#Home" data-slide="next">
    	<span class="carousel-control-next-icon" style="height:40px; width:30px; background-color: black;"></span>
  		</a>

	</section>
	
 <!--  End of Home section -->

<!--  Start of Product section -->
<span class="hrrr1"><hr class="hrstyle1"></span>
<section class="work"  data-wow-duration=".5s" data-wow-delay=".5s" id="works"><br>
  <div class="row" >
	<div class="col-md-1"></div>
	<div class="col-md-10 col-sm-12">
  <div class="col-md-5 lt wow bounceInLeft col-sm-12">
    <a href="TilesPage2.php ? uid=CERAMIC TILES & uid2= & uid3= " title="Dharaiya Text Tiles.">
      <figure class="container">
      <img src="Tiles/ceramic_tiles.jpg" alt="Avatar">
        <div class="overlay">
        <figcaption class="text" style="background-color: #ce78db;">CERAMIC TILES</figcaption>
        </div>
      </figure>
    </a>
  </div>
  <div class="col-md-2"></div>
  <div class="col-md-5 lt wow bounceInRight col-sm-12">
      <a href="TilesPage2.php ? uid=WALL TILES & uid2= & uid3= "  title="Dharaiya Text Tiles." >
      <figure class="container">
      <img src="Tiles/wall_tiles.jpg" alt="Avatar">
        <div class="overlay">
        <figcaption class="text" style="background-color: #81d742;">WALL TILES</figcaption>
        </div>
      </figure>
    </a>
  </div>
  </div>
  <div class="col-md-1"></div>
</div>
<div class="row" >
  <div class="col-md-1"></div>
  <div class="col-md-10 col-sm-12">
  <div class="col-md-5 lt wow bounceInLeft col-sm-12">
    <a href="TilesPage2.php ? uid=FLOOR TILES & uid2= & uid3= " title="Dharaiya Text Tiles." >
      <figure class="container">
      <img src="Tiles/floor_tiles.jpg" alt="Avatar">
        <div class="overlay">
        <figcaption class="text" style="background-color: #ffb535;">FLOOR TILES</figcaption>
        </div>
      </figure>
    </a>
  </div>
  <div class="col-md-2"></div>
  <div class="col-md-5 lt wow bounceInLeft col-sm-12">
    <a href="TilesPage2.php ? uid=OUTDOOR TILES & uid2= & uid3= "  title="Dharaiya Text Tiles.">
      <figure class="container">
      <img src="Tiles/outdoor_tiles.jpg" alt="Avatar">
        <div class="overlay">
        <figcaption class="text" style="background-color: rgb(223,136,136);">OUTDOOR TILES</figcaption>
        </div>
      </figure>
    </a>
  </div>
  </div>
  <div class="col-md-1"></div>
</div>
<br> 


<span class="hrrr2"><hr class="hrstyle2"></span>
<div class="row" >
  <div class="col-md-1"></div>
  <div class="col-md-10 col-sm-12">
  <div class="col-md-5 lt wow bounceInLeft col-sm-12">
    <a href="feedback.php ? u=FEEDBACK" title="Dharaiya Text Tiles.">
      <figure class="container">
      <img src="Tiles/by_category.jpg" alt="Avatar">
        <div class="overlay">
        <figcaption class="text" style="background-color: #ce78db;">FEEDBACK</figcaption>
        </div>
      </figure>
    </a>
  </div>
  <div class="col-md-2"></div>
  <div class="col-md-5 lt wow bounceInRight col-sm-12">
      <a href="dealer.php ? u=DEALER LOCATOR" title="Dharaiya Text Tiles." >
      <figure class="container">
      <img src="Tiles/by_series.jpg" alt="Avatar">
        <div class="overlay">
        <figcaption class="text" style="background-color: #81d742;">DEALERS LOCATOR</figcaption>
        </div>
      </figure>
    </a>
  </div>
  </div>
  <div class="col-md-1"></div>
</div>
<div class="row" >
  <div class="col-md-1"></div>
  <div class="col-md-10 col-sm-12">
  <div class="col-md-5 lt wow bounceInLeft col-sm-12">
    <a href="contact_us.php ? u=CONTACT US" title="Dharaiya Text Tiles." >
      <figure class="container">
      <img src="Tiles/by_finish.jpg" alt="Avatar">
        <div class="overlay">
        <figcaption class="text" style="background-color: #ffb535;">CONTACT US</figcaption>
        </div>
      </figure>
    </a>
  </div>
  <div class="col-md-2"></div>
  <div class="col-md-5 lt wow bounceInLeft col-sm-12">
    <a href="TilesPage2.php ? uid=OUTDOOR TILES &uid2= &uid3="  title="Dharaiya Text Tiles.">
      <figure class="container">
      <img src="Tiles/tilescalculator.jpg" alt="Avatar">
        <div class="overlay">
        <figcaption class="text" style="background-color: rgb(223,136,136);">TILES CALCULATOR</figcaption>
        </div>
      </figure>
    </a>
  </div>
  </div>
  <div class="col-md-1"></div>
</div>

</section>
<br><br><br><br><br>

<?php

       include('Footer.php');
?>

  </body>
</html>