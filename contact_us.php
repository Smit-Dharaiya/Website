<?php
session_start();
include('connection.php');
include('extra.php');
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'vendor/autoload.php';

if(isset($_POST['submit']))
{
    
    if(isset($_POST['submit']))
   {

        $scode1="312689";
        $scode2=$_POST['scode2'];
        $fname=$_POST['fname'];
        $lname=$_POST['lname'];
        $email=$_POST['email'];
        $contact=$_POST['contact'];
        $message=$_POST['message'];


     if($fname!="" && $lname!="" && $email!="" && $contact!="" && $message!="" && $scode1 == $scode2 )
     {
     
        $sql="INSERT INTO `contact`(`First Name`, `Last Name`, `Email`, `Contact`, `Message`) VALUES ('$fname','$lname','$email','$contact','$message')";
        $res=mysqli_query($con,$sql);
        if(!$res)
          {
            echo 'error in inserting';
          }  
        else
          {
            echo '<script>alert("Your Request has been Successfully submited");</script>';
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
                    $mail->Body='Thank You So Much '.$fname.' '.$lname.' For Contacting Us. Our Nearest Dealer Will Contact You Through The details Provided By You. And Will Deffenitely Solve Your Queries. ' ;

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
        echo '<script>alert("Enter All The Details Properly");</script>';
     }
   }
 }

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/contact_us.css">
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
<!-- <a href="Tiles/dealers.jpg"></a> -->
<?php
$data=$_GET['u'];
   echo '<figcaption><h1 class="wall wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.6s">' . $data .'</h1></figcaption>';
?>
 <p class="touch wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.6s">WANT TO GET IN TOUCH WITH US?</p>
 <p class="touch2 wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.6s">-For any request, please fill in the form below and we shall respond as soon as possible.</p>
 <div class="row hauuuu">
 <div class="col-md-1"></div>
 <div class="col-md-10 col-sm-12">
 <form method="POST" class="main wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.6s" action="contact_us.php ? u=CONTACT US" onsubmit="return validation()">	
 	<div class="floatt col-md-3">
	First Name *<br><input type="text" name="fname" name="fname" size="30" required="true"><br><br>
	State *<br><?php
        $temp=getDropdownState();
        $i=0;
        echo '<select name="state" id="stateDropdown" onchange="getcity(this.value)">';
         while($i<count($temp))
         {
            echo '<option id="opt" class="opt" value="'.$temp[$i].'">'.$temp[$i].'</option>';
            $i++;
         }
        echo '</select>';
  ?><br><br>
	Phone *<br><input type="text" name="contact" id="contact" required><br><br>
	Security Code <br><input type="text" name="scode1" placeholder="3 1 2 6 8 9" disabled><br><br>
	Message *<br><textarea rows="5" cols="50" name="message" required></textarea><br><br><br><br><br>
    </div>
    <div class="col-md-1"></div>
    <div class="floatt col-md-3">
    Last Name *<br><input type="text" name="lname" id="lname" size="30" required="
    true"><br><br>
    City *<br><select name="city" id="city-list">
      <option value="SELECT STATE" disabled="true">SELECT STATE</option>
	</select><br><br>
	Email Address *<br><input type="text" name="email" id="email" size="30" required><br><br>
	Enter Security Code *<br><input type="text" name="scode2" required><br><br>
	<span class="btn"><input type="submit" value="SUBMIT" name="submit" onsubmit="validation()"></span><br><br>		
    </div>
    <div class="floatt col-md-3">
    	<div class="tech">
    <p>For products related technical assistance / queries only, contact</p><hr>
    <p>Mr. Poojan Dharaiya</p>
    <p><i class="fa fa-phone"></i> 8200678973</p>
    <p><i class="fa fa-envelope-o"> poojandharaiya@gmail.com</i></p><hr>
    <p>Mr. Smit Dharaiya</p>
    <p><i class="fa fa-phone"></i> 7383570077</p>
    <p><i class="fa fa-envelope-o"> smitdharaiya@gmail.com</i></p>
    
    </div>
    </div>
   </form>
   </div>
   	<div class="col-md-1"></div>
   </div>
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
   <script>

        function validation(){
            var x=document.getElementById("contact").value;
            var y=document.getElementById("fname").value;
            var z=document.getElementById("lname").value;
            var a=document.getElementById("email").value;
            // var e=/^[0-9a-zA-Z]+\@+[a-zA-Z]+\.com/;
             var r=/^[A-Za-z]+\w/;
             var e=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
            var w=/^\d{10}$/;
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