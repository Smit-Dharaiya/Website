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
<figcaption><h1 class="wall wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.6s">CONTACTS</h1></figcaption>
<span class="hrrr1"><hr class="hrstyle2"></span>
<div class="row">
<?php
    $sql="SELECT * FROM `contact` WHERE 1";
    $res=mysqli_query($con,$sql);

    while($row=mysqli_fetch_array($res))
    {
        echo '<div class="col-sm-12 col-md-5 feedback1">
             <h3>'.$row[1].' '.$row[2].'</h3>
             <p><i class="fa fa-envelope" aria-hidden="true"></i> '.$row[3].'</p>
             <p><i class="fa fa-phone" aria-hidden="true"></i> '.$row[4].'</p>
             <p><i class="fa fa-comment aria-hidden="true"></i> '.$row[5].'</p>
             <button onclick="sendReply(this.value)" value="'.$row[3].'" id="mail"> Reply </button>
             </div>' ;
    }
?>
   <div id="reply" >
   <center><h5>RESPONSE</h5></center><br>
   <center><textarea rows="5" cols="50" name="comment" id="content" required></textarea></center><br>
   <center><button class="btn-primary" onclick="sendMail()">SEND</button>
   </center>
  </div>
<script>
    $(document).ready(function(){
        $("#reply").hide();
    });
  
    var mail;
    function sendReply(val)
    {
        $("#reply").fadeIn("2000");
        mail=val;
    }
    function sendMail()
    {
        alert("");
        var content=document.getElementById("content").value;
        window.location.href = "mail.php?email=" + mail + "&content="+content ;
    }
</script>
</body>
</html>