<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/signUp.css">
    <link rel="stylesheet" href="css/Footer.css">


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
<center>
<div id="user-form">
<br><br><p style="font-family: Open Sans;font-weight: bold;"> <h1 id="Heading">User Login </h1></p>
<form  method="POST" style="border:1px solid #ccc;background-color: black">
  <div class="imgcontainer">
    <img src="Tiles/capture8.png" alt="Avatar" class="avatar" style="width: 300px">
  </div>

  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" id="uname" required>

    <label for="password"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" id="upassword" required>

    <button type="button" name="submit"  onclick="onLogin()">Login</button>
 
  </div>
  <div class="container">
    <input type="button" value="Admin Login" class="btn-primary lgn" onclick="changeForm(this.value)">
     <button onclick="changeForm(this.value)" value="Sign-Up" >Sign Up</button>
  </div>

</form>
</div>
</center>

<center>
<div id="admin-form">
<br><br><p style="font-family: Open Sans;font-weight: bold;"> <h1 id="Heading">Admin Login </h1></p>
	<form  method="POST" style="border:1px solid #ccc;background-color: black" name="loginPage" >
  <div class="imgcontainer">
    <img src="Tiles/capture8.png" alt="Avatar" class="avatar" style="width: 300px">
  </div>

  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="aname" id="aname" required>

    <label for="password"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="apassword" id="apassword" required>

    <button type="button" name="submit" value="userLogin" onclick="adminLogIn()">Login</button>
 
  </div>
  <div class="container ">
    <input type="button" value="User Login" class="btn-primary lgn" onclick="changeForm(this.value)">
     <button onclick="changeForm(this.value)" value="Sign-Up" >Sign Up</button>
  </div>

</form>
</div>
</center>
<center>
  <div id="SignUp-form">
  <form style="border:1px solid #ccc;background-color: black">
  <div class="container">
    <h3>Sign Up</h3>
    <hr>
    <label for="Username"><b>Username :</b></label>
    <input type="text" placeholder="Enter Username" name="email" id="Uemail" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" id="psw" required>

    <label for="psw-repeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="psw-repeat" id="psw-repeat" required>
    

    <div class="clearfix">
      <button type="button" class="cancelbtn" onclick="changeForm('User Login') ">Cancel</button>
      <button type="button" class="signupbtn" onclick="signUp()" >Sign Up</button>
    </div>
  </div>
</form><br>
<br><br><br>
</div>

</center>

<script>
  $(document).ready(function(){
    $("#admin-form").hide();
    $("#user-form").show();
    
    $("#SignUp-form").hide();
  });
  function changeForm(val){
    if(val == "Admin Login")
    {
      $("#user-form").fadeOut(1000,function(){
      $("#admin-form").show(1000);
    });
    }
    else if(val == "User Login")
    {
      $("#admin-form").fadeOut(1000,function(){
      $("#SignUp-form").fadeOut(1000);
      $("#user-form").show(1000);
    });
    }
    else if(val == "Sign-Up")
    {
      $("#admin-form").hide(1000);
      $("#user-form").hide(1000);
      $("#SignUp-form").show(1000);
    }

  }
  function onLogin(){
    var x=document.getElementById("uname").value;
    var y=document.getElementById("upassword").value;
    // var r=/^([A-Za-z{1}])+([A-Za-z])/;
    var r=/^[A-Za-z]+\w/;
    var w=/^[0-9]{10}/;
    if(x!="" && y!="" && r.test(x)!=false){
    window.location= "userLogin.php?uname=" + x + "&upassword="+y ;
   }
   else if(r.test(x.value)==false){
   	alert("Enter Proper Name");
   }
    else{
      alert("Enter Details");
     }
  }



  function signUp(){
      var x=document.getElementById("Uemail").value;
      var y=document.getElementById("psw").value;
      var z=document.getElementById("psw-repeat").value;
      if(x!="" && y!="" && z!=""){
        if(y==z){
    window.location= "userSignUp.php?Uemail=" + x + "&psw="+y ;
      }
        else{
          alert("Password Does not match");
        }
   }
       else{
      alert("Enter Details")
     }

  }
  function adminLogIn(){
    var x=document.getElementById("aname").value;
    var y=document.getElementById("apassword").value;
    if(x!="" && y!="" ){
    window.location= "adminLogin.php?aname=" + x + "&apassword="+y ;
   }
    else{
      alert("Enter Details");
     }

  }
</script>
<br><br><br><br><br><br>
<?php
  include('Footer.php');
?>
</body>
</html>
