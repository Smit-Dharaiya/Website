<?php
    session_start();
    include('connection.php');
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    require 'vendor/autoload.php';

    if(isset($_POST['submit']))
   {
        $scode1="312689";
        $scode2=$_POST['scode2'];
        $fname=$_POST['fname'];
        $lname=$_POST['lname'];
        $email=$_POST['email'];
        $contact=$_POST['contact'];
        $comment=$_POST['comment'];
        $occupation=$_POST['proffesion'];


     if($scode1 == $scode2)
     {
        $sql="INSERT INTO `feedback`(`First Name`, `Last Name`, `Email`, `Contact`, `Occupation`, `Comment`) VALUES ('$fname','$lname','$email','$contact','$occupation','$comment')";
        $res=mysqli_query($con,$sql);
        if(!$res)
          {
            echo 'error in inserting';
          }  
        else
        {
            echo '<script>alert("Feedback Successfully submited");</script>';

            if(isset($_POST['submit']))
            {
                $mail=new PHPMailer();
                try{
                    $mail->isSMTP();
                    $mail->Host='smtp.gmail.com';
                    $mail->Port=587;
                    $mail->SMTPAuth=true;
                    $mail->SMTPSecure='tls';
                    $mail->Username='dharaiyatexttiles@gmail.com';
                    $mail->Password="unusedbrains";

                    $mail->setFrom('dharaiyatexttiles@gmail.com','Dharaiya Text-Tiles');
                    $mail->addAddress($_POST['email']);
                    $mail->addReplyTo('Dharaiya Text-Tiles');

                    $mail->isHTML(true);
                    $mail->Subject='Feedback Response: ';
                    $mail->Body='Thank You So Much '.$fname.' '.$lname.' For Your Valuable Feedback. We will Be Surely Responding To It Very Soon. ' ;

                    $mail->send();
                }
                catch(Exception $e)
                {
                    $result="Something went Worng. please try again.".$mail->ErrorInfo;
                }
            }

        }
     }
     else
     {
        echo '<script>alert("security code is wrong");</script>';
     }
   }
  

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/feedback.css">
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
<div class="headdd col-md-12 col-sm-12"></div>
<?php
$data=$_GET['u'];
   echo '<figcaption><h1 class="wall wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.6s">' . $data .'</h1></figcaption>';
?>
<p class="touch wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.6s">SHARE AN IDEA AND GIVE A SUGGESTION</p>
 <p class="touch2 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.6s">Tell us how we can improve</p>
 <div class="row hauuuu">
 <div class="col-md-1"></div>
 <div class="col-md-10 col-sm-12">
 <form method="POST" class="main wow fadeInUp" data-wow-duration="1s" action="feedback.php ? u=FEEDBACK" data-wow-delay="0.6s" onsubmit="return validation()">  
    <div class="floatt col-md-3">
    First Name *<br><input type="text" name="fname" id="fname" size="30" required><br><br>
    Contact No *<br><input type="text" name="contact" id="contact" required><br><br>
    Security Code <br><input type="text" name="scode1" placeholder="3 1 2 6 8 9" disabled><br><br>
    Your Comment *<br><textarea rows="5" cols="50" name="comment" required></textarea><br><br><br><br><br>
    </div>
    <div class="col-md-1"></div>
    <div class="floatt col-md-3">
    Last Name *<br><input type="text" name="lname" size="30" id="lname" required><br><br>
    Profession *<br><select id="proffesion" name="proffesion">
        <option>Home Improvement Dealer</option>
        <option>Vendor</option>
        <option>Interior Designer</option>
        <option>Architect</option>
        <option>Builder</option>
        <option>Student Of Architecture</option>
        <option>Home Owner</option>
        <option>Other</option>
    </select><br><br>
    Enter Security Code *<br><input type="text" name="scode2" required><br><br>
    <span class="btn"><input type="submit" name="submit" value="SUBMIT"></span>       
    </div>
    <div class="floatt col-md-3 col-sm-12">
    Email Address *<br><input type="email" name="email" id="email" size="40" required><br><br><br><br>
    </div>
   </form>
   </div>
    <div class="col-md-1"></div>
   </div>

   <script>

        function validation(){
            var x=document.getElementById("contact").value;
            var y=document.getElementById("fname").value;
            var z=document.getElementById("lname").value;
            var a=document.getElementById("email").value;
            // var e=/^[0-9a-zA-Z]+\@+[a-zA-Z]+\.com/;
            var e=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
            var w=/^\d{10}$/;
             var r=/^[A-Za-z]+\w/;
             // var w=/^[0-9]{10}/;
             

            if(w.test(x)==false){
                alert("Enter Valid mobile number");
                return false;
            }

            if(r.test(y)==false){
                alert("Enter Valid First Name");
                return false;
            }

            if(r.test(z)==false){
                alert("Enter valid Last Name");
                return false;
            }
            if(e.test(a)==false){
                alert("Enter valid Email Address");
                return false;
            }
            return true;

        }
       
   </script>
   <?php
   include('Footer.php');
   ?>
</body>
</html>