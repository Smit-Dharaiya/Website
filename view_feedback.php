<?php
session_start();
include('connection.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/Footer.css">
    <link rel="stylesheet" href="css/view_feedback_css.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" >
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
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
</div>
<figcaption><h1 class="wall wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.6s">FEEDBACKS</h1></figcaption>
<span class="hrrr1"><hr class="hrstyle1"></span>
<div class="row">
<?php
	$sql="SELECT * FROM `feedback` WHERE 1";
	$res=mysqli_query($con,$sql);

	while($row=mysqli_fetch_array($res))
	{
		echo '<div class="col-sm-12 col-md-5 feedback1">
			 <h3>'.$row[1].' '.$row[2].'</h3>
			 <p><i class="fa fa-envelope" aria-hidden="true"></i> '.$row[3].'</p>
			 <p><i class="fa fa-phone" aria-hidden="true"></i> '.$row[4].'</p>
			 <p><i class="fa fa-user-md" aria-hidden="true"></i> '.$row[5].'</p>
			 <p><i class="fa fa-comment aria-hidden="true"></i> '.$row[6].'</p>
			 </div>' ;
	}
?>
</div>
</body>
</html>
