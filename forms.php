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
    <link rel="stylesheet"href="css/button.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/Footer.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" >
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-2.1.3.min.js"></script>
  	<script src="js/jquery.validate.min.js"></script>
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
<body style="background-color:  #ccd5db;">
	<?php
	include('header.php');
    ?>
<div class="main">
<div class="row">
<div class="col-md-8 ">
	<div class="col-md-3 space">
<button class="btn-3d blue" onclick="getForm(this.value)" value="add-tiles">Add Tiles</button>
	</div>
	<div class="col-md-3 space">
<button class="btn-3d blue" onclick="getForm(this.value)" value="add-category">Add Category </button>
	</div>
	<div class="col-md-3 space">
<button class="btn-3d blue" onclick="getForm(this.value)" value="add-finish">Add Finish</button>
	</div>
	<div class="col-md-3 space">
<button class="btn-3d blue" onclick="getForm(this.value)" value="remove-tile">Remove Tiles</button>
	</div>
	<div class="col-md-3 space">
<button class="btn-3d blue" onclick="getForm(this.value)" value="remove-category">Remove Category </button>
	</div>
	<div class="col-md-3 space">
<button class="btn-3d blue" onclick="getForm(this.value)" value="remove-finish">Remove Finish</button>
	</div>
	<div class="col-md-3 space">
<button class="btn-3d blue" onclick="getForm(this.value)" value="change-contact-info">Change Contact Info.</button>
	</div>
	<div class="col-md-3 space">
<button class="btn-3d blue" onclick="getForm(this.value)" value="add-user">Add User(Admin)</button>
	</div>
	<div class="col-md-3 space">
<button class="btn-3d blue" onclick="getForm(this.value)" value="add-dealer">Add Dealer</button>
	</div>
	<div class="col-md-3 space">
<button class="btn-3d blue" onclick="getForm(this.value)" value="remove-dealer">Remove Dealer</button>
	</div>
	<div class="col-md-3 space">
<button class="btn-3d blue" onclick="getForm(this.value)" value="change-credentials">Change Credentials</button>
	</div>
	<div class="col-md-3 space">
<button class="btn-3d blue" onclick="getForm(this.value)" value="change-price">Change Price</button>
	</div>
  <div class="col-md-3 space">
<button class="btn-3d blue" onclick="getForm(this.value)" value="view-feedback">View Feedback</button>
  </div>
  <div class="col-md-3 space">
<button class="btn-3d blue" onclick="getForm(this.value)" value="view-contact">View Contact</button>
  </div>
	</div>
	<div class="col-md-4">
    <div class="common add-category">
<center><form method="POST" class="cmn add-category" style="margin-top:100px">
	<p class="heading"> Add Category </p><br>
 Category: <input type="text" id="add-category" size="30" id="new"><br><br>
<input type="button" class="post btn-primary" value="add-category" onclick="addCategory(this.value)" style="margin-left: 80px;"><br>	
</form></center>
</div>

<div class="common add-finish">
<center><form method="POST" class="cmn add-finish"  style="margin-top:100px">
<p class="heading"> Add Finish </p><br>
Add Finish     : <input type="text" id="add-finish" size="30" id="new"><br><br>
<input type="button" class="post btn-primary" value="add-finish" onclick="addFinish(this.value)" style="margin-left: 80px;"><br>	
</form></center>
    </div>

    <div class="common remove-category">
<center><form method="POST" class="cmn remove-category"  style="margin-top:100px">
<p class="heading"> Remove Category </p><br>
 Category : <select  id="remove-category">
<?php
$a="SELECT * FROM `categories` WHERE 1";
$res=mysqli_query($con,$a);
    echo '<option disabled selected>SELECT CATEGORY</option>';
    while($row=mysqli_fetch_array($res))
    {
    echo '<option value='.$row[0].'>'; echo $row[0]; echo '</option>';
    }
?>
</select><br><br>
<input type="button" class="post btn-primary" value="remove-category" onclick="removeCategory(this.value)" style="margin-left: 70px;"><br>	
</form></center>
    </div>

<div class="common remove-finish">
<form method="POST" class="cmn remove-finish" style="margin-top:100px;margin-left: 100px;">
<p class="heading" style="margin-left: 60px"> Remove Finish </p><br>
Finish : <select id="remove-finish" style="width: 250px">
<?php
$a="SELECT * FROM `finish` WHERE 1";
$res=mysqli_query($con,$a);
    echo '<option disabled selected>SELECT FINISH</option>';
    while($row=mysqli_fetch_array($res))
    {
    echo '<option value="'.$row[0].'">'; echo $row[0]; echo '</option>';
    }
?>	
</select><br><br>
<input type="button" class="post btn-primary" value="remove-finish" onclick="removeFinish(this.value)" style="margin-left: 110px;">	
</form>
    </div>
    <div class="common add-tiles">
		<center>
		<form action="Add.php" method="post" class="cmn add-tiles" enctype="multipart/form-data" style="background-color:rgb(9, 177, 211)" >
        Tile Name :*<br><input type="text" name="Name" size="50" required="true" style="width: 300px;"><br><br>
        Type *<br><select name="Tile_Type" >
        <option disabled selected>SELECT CITY</option>
        <option value="WALL TILES">WALL TILES</option>
        <option value="OutDoor Tiles">OUTDOOR TILES</option>
        <option value="Floor Tiles">FLOOR TILES</option>
        <option value="Ceramic Tiles">CERAMIC TILES</option>
        <option value="Living Room Tiles">LIVING ROOM TILES</option>
        <option value="Kitchen Tiles">KITCHEN TILES</option>
        <option value="Bedroom Tiles">BEDROOM TILES</option>
        <option value="Bathroom Tiles">BATHROOM TILES</option>
        <option value="Commercial Tiles">COMMERCIAL TILES</option>
    </select><br><br>
        Category *<br><select name="Category" id="categoryDropdown">
         <script>
            $(document).ready(function()
            {
                x="category";
                var xmlhttp=new XMLHttpRequest ();
                xmlhttp.open("GET","category.php ? state="+x,false);
                xmlhttp.send(null);
                document.getElementById("categoryDropdown").innerHTML=xmlhttp.responseText;
            })
        </script>
    </select><br><br>
        Finish *<br><select name="Finish" id="finishDropdown">
         <script>
            $(document).ready(function()
            {
                x="finish";
                var xmlhttp=new XMLHttpRequest ();
                xmlhttp.open("GET","category.php ? state="+x,false);
                xmlhttp.send(null);
                document.getElementById("finishDropdown").innerHTML=xmlhttp.responseText;
            });
        </script>
    </select><br><br>
        Size *<br><select name="Size" placeholder="Select Size"> 
        <option disabled selected>SELECT SIZE</option>
        <option value="800 * 800">800 * 800</option>
        <option value="600 * 600">600 * 600</option>
    </select><br><br>
        Price :*<br><input type="number" name="Price" size="50" required="true"><br><br>  
        <h4>Select image to upload *</h4><br>
    <input type="file" name="fileToUpload" id="fileToUpload">
 	<input type="submit" class="btn-primary" name="submit"><br><br>
    <br><br><br><br><br>
	</form></center>
	</div>

<div class="common add-user">
<center><form method="POST" class="cmn add-user"  style="margin-top:100px">
<p class="heading" style="margin-left: 50px"> Add User(Admin) </p><br>
<pre>
Username         :  <input type="text" id="uname" size="30" required><br>
Password         :  <input type="text" id="pass" size="30" required><br>
Confirm-Password :  <input type="text" id="confPass" size="30" required><br>
</pre>
<input type="button" class="post btn-primary" value="add-user" onclick="addUser(this.value)" style="margin-left: 80px;"><br>	
</form></center>
    </div>

<div class="common remove-tile">
<form method="POST" class="cmn remove-tile" style="margin-top:100px;margin-left: 100px;">
<p class="heading" style="margin-left: 60px"> Remove Tiles </p><br>
Tile : <select id="remove-tile" style="width: 250px">
<?php
$a="SELECT Name FROM `by_space` WHERE 1";
$res=mysqli_query($con,$a);
    echo '<option disabled selected>SELECT TILE</option>';
    while($row=mysqli_fetch_array($res))
    {
    echo '<option value="'.$row[0].'">'; echo $row[0]; echo '</option>';
    }
?>	
</select><br><br>
<input type="button" class="post btn-primary" value="remove-tile" onclick="removeTiles(this.value)" style="margin-left: 110px;">	
</form>
    </div>

    <div class="common change-contact-info">
<center><form method="POST" class="cmn change-contact-info"  style="margin-top:100px">
<p class="heading" style="margin-left: 30px"> Change Contact Info </p><br>
<!-- Add Finish     : <input type="text" id="change-contact_info" size="30" id="new"><br><br> -->
Contact Info : <select style="width: 250px" id="contact-info">
	<option disabled="true" selected="true">Select</option>
	<option value="customer-care-no">Customer Care No.</option>
	<option value="email">Email</option>
	<option value="address">Address</option>
	</select>
<br><br><label id="customer-care-no">Customer Care No. : <input type="text" id="Customer-Care-No" size="30"><br><br></label>
<label id="email">Email : <input type="text" id="Email" size="30"><br><br></label>
<label id="address">Address : <input type="text" id="Address" size="30"><br><br></label>
<br><br>
<input type="button" class="post btn-primary" value="change-contact-info" onclick="changeContactInfo(this.value)" style="margin-left: 80px;"><br>	
</form></center>
    </div>

    <div class="common add-dealer">
<center><form method="POST" class="cmn add-dealer"  style="margin-top:100px">
<p class="heading"> Add Dealer </p><br>
<p id="dname">Dealer Name : <input type="text" id="dealer-name" size="30" id="new"><br></p>
Select State : 
   <?php
        $temp=getDropdownState();
        $i=0;
        echo'<select name="state" id="cityDropdown" onchange="getcity(this.value)">';
         while($i<count($temp))
         {
            echo '<option id="opt" class="opt" value="'.$temp[$i].'">'.$temp[$i].'</option>';
            $i++;
         }
        echo '</select>';
  ?>
  <br><br>
   <p>Select city :  <select name="city" id="cityList" style="width: 200px" >
                       <option>All City</option>
                     </select></p>
                     Email :  <input type="text" id="dealer-email" size="27"><br><br>
                     Contact No <input type="text" id="dealer-contact" size="23"><br><br>
                    <p id="add"> Address :</p><p id="add2"><textarea rows="3" id="dealer-address" cols="40"></textarea></p>
<input type="button" class="post btn-primary" value="add-dealer" onclick="addDealer(this.value)" style="margin-left: 80px;"><br>	
</form></center>
    </div>

 <div class="common change-credentials">
<center><form method="POST" class="cmn change-credentials"  style="margin-top:100px">
<p class="heading" style="margin-left: 30px"> Change Credentials </p><br>
<!-- Add Finish     : <input type="text" id="change-contact_info" size="30" id="new"><br><br> -->
Credentials : <select style="width: 250px" id="credentials">
	<option disabled="true" selected="true">Select</option>
	<option value="username">Username</option>
	<option value="password">Password</option>
</select><br><br>
<label id="username">Username: <input type="text" id="Username" size="30"><br><br></label>
<label id="password">Password: <input type="password" id="Password" size="30" ><br><br></label>
<label id="confpass">Confirm Password: <input type="password" id="ConfPass" size="30" ><br><br></label> 
<input type="button" class="post btn-primary" value="change-credentials" onclick="changeCredentials(this.value)" style="margin-left: 80px;"><br>	
</form></center>
 </div>

 <div class="common remove-dealer">
<center><form method="POST" class="cmn remove-dealer"  style="margin-top:100px">
<p class="heading">Remove Dealer </p><br>
<!-- <p id="dname">Dealer Name : <input type="text" id="add-dealer" size="30" id="new"><br></p> -->
Select State : 
   <?php
         $temp=getDropdownState();
        $i=0;
        echo'<select name="state" id="Citydropdown" onchange="getcity(this.value)">';
         while($i<count($temp))
         {
            echo '<option id="opt" class="opt" value="'.$temp[$i].'">'.$temp[$i].'</option>';
            $i++;
         }
        echo '</select>';
  ?><br><br>
   <p>Select city : <select name="city" id="city-List" style="width: 200px" onchange="getDealer(this.value)">
                       <option>All City</option>
                     </select></p></p>

       Dealer Name :
 	<select name="delearn" id="name-list" style="width: 170px">
                       <option>All Dealers</option>
                     </select>
                    
<br><br><input type="button" class="post btn-primary" value="remove-dealer" onclick="removeDealer(this.value)" style="margin-left: 80px;"><br>	
</form></center>
</div>

<div class="common change-price">
<form method="POST" class="cmn change-price" style="margin-top:100px;margin-left: 100px;">
<p class="heading" style="margin-left: 20px"> Change Tiles Info </p><br>
Tile : <select id="tile-name" style="width: 250px" onchange="getOldPrice(this.value)">
<?php
$a="SELECT Name FROM `by_space` WHERE 1";
$res=mysqli_query($con,$a);
    echo '<option disabled selected>SELECT TILE</option>';
    while($row=mysqli_fetch_array($res))
    {
    echo '<option value="'.$row[0].'">'; echo $row[0]; echo '</option>';
    }
?>
 </select><br><br>
 <p class="price"> <p id="op"></p></p>
 New Price : <input type="number" id="new-price" name="newprice" size="50">
<br><input type="button" class="post btn-primary" value="change-price" onclick="changePrice(this.value)" style="margin-left: 110px;">	
</form>
</div>

</div>
</div>

</div><br><br><br><br><br><br>
	<?php
	include('Footer.php');
    ?>
</body>

	<script>
		$(document).ready(function(){
			$(".common").hide();
		});
		function getForm(frm)
		{	
			$(".cmn").hide();
			$("."+frm).show();

			if(frm=="change-tile-info"){
			$(".price").hide();
			}

			if(frm=="change-credentials"){
			$("#password").hide();
			$("#username").hide();
			$("#confpass").hide();
			}

			if(frm=="change-contact-info"){
			$("#customer-care-no").hide();
			$("#address").hide();
			$("#email").hide();
			}

      if(frm=="view-feedback"){
      window.location = "view_feedback.php";
      }
      if(frm=="view-contact"){
      window.location = "view_contact.php";
      }
		}

		function getcity(val)
   		{
    		var x=val; 
    		var xmlhttp=new XMLHttpRequest ();
    		xmlhttp.open("GET","City.php ? state="+x,false);
    		xmlhttp.send(null);
    		document.getElementById("city-List").innerHTML=xmlhttp.responseText;
    		document.getElementById("cityList").innerHTML=xmlhttp.responseText;
  		}

  		function getDealer(val)
  		{
  			var x=val; 
    		var xmlhttp=new XMLHttpRequest ();
    		xmlhttp.open("GET","dealer_dropdown.php ? city="+x,false);
    		xmlhttp.send(null);
    		document.getElementById("name-list").innerHTML=xmlhttp.responseText;
  		}
  		function getOldPrice(val)
   		{
    		var y=val; 
    		var xmlhttp=new XMLHttpRequest ();
    		xmlhttp.open("GET","oldprice.php ? tname="+y,false);
    		xmlhttp.send(null);
    		document.getElementById("op").innerHTML=xmlhttp.responseText;
  		}
  		$("#credentials").change(function()
  		{
  			if($('option:selected',this).text()=="Username"){
  			$("#username").show();
  			$("#password").hide();
  			$("#confpass").hide();
  		}
  	 		else if($('option:selected',this).text()=="Password"){
  			$("#password").show();
  			$("#confpass").show();
	    	$("#username").hide();
  	 	}	 
  		});

  		$("#contact-info").change(function()
  		{
  			if($('option:selected',this).text()=="Customer Care No."){
  			$("#customer-care-no").show();
	    	$("#address").hide();
	    	$("#email").hide();
  		}
  	 	else if($('option:selected',this).text()=="Email"){
  			$("#email").show();
  			$("#customer-care-no").hide();
	    	$("#address").hide();
		} 
   	 	else if($('option:selected',this).text()=="Address"){
  			$("#address").show();
  			$("#customer-care-no").hide();
	    	$("#email").hide();
  	 } 
  		});
		function addCategory(val)
		{
			var fun=document.getElementById("add-category").value;
			if(fun == "")
			{
				alert("Enter Category To Add");
			}
			else
			{
				window.location = "functions.php?state=" + val + "&fun="+fun ;
			}	
		}
		function addFinish(val)
		{
			var fun=document.getElementById("add-finish").value;
			alert(fun);
			if(fun == "")
			{
				alert("Enter Finish To Add");
			}
			else
			{
			alert(fun);
			window.location = "functions.php?state=" + val + "&fun="+fun ;	
			}
		}
		function removeCategory(val)
		{
			var e = document.getElementById("remove-category");
			var fun = e.options[e.selectedIndex].text;
			if(fun == "SELECT CATEGORY")
			{
				alert("select category to remove");
			}
			else
			{
			console.log("wdd");
			window.location.href = "functions.php?state=" + val + "&fun="+fun ;
			}	
		}
		function removeFinish(val)
		{
			var e = document.getElementById("remove-finish");
			var fun = e.options[e.selectedIndex].value;
			if(fun == "SELECT FINISH")
			{
				alert("select finish to remove");
			}
			else
			{
			window.location = "functions.php?state=" + val + "&fun="+fun ;
			}			
		}
		function addUser(val)
		{
			var uname=document.getElementById("uname").value;
			var pass=document.getElementById("pass").value;
			var confPass=document.getElementById("confPass").value;

			if(uname != "" && pass != "" && confPass != "")
			{
				alert(pass);
				alert(confPass);
				if(pass == confPass)
				{
					window.location = "functions.php?state=" + val + "&uname="+uname + "&pass="+pass ;
				}
				else
				{
					alert("confirm your password correctly");
				}
			}
			else
			{
				alert("enter details");
			}
		}

		function removeTiles(val){

			var e = document.getElementById("remove-tile");
			var fun = e.options[e.selectedIndex].value;

			if(fun != "")
			{
			window.location = "functions.php?state=" + val + "&tile="+fun ;
			}
			else
			{
				alert("select tile to remove");
			}
		}

		function changeContactInfo(val)
		{
			var e = document.getElementById("contact-info");
			var fun = e.options[e.selectedIndex].value;
			if(fun != "Select")
			{
				if(fun == "customer-care-no")
				{
					alert("");
					var number=document.getElementById("Customer-Care-No").value;
					window.location = "functions.php?state=" + val +"&fun="+fun +"&number="+number;
				}
				else if(fun == "email")
				{
					var email=document.getElementById("Email").value;
					window.location = "functions.php?state=" + val +"&fun="+fun+ "&email="+email;
				}
				else if(fun == "address")
				{
					var address=document.getElementById("Address").value;
					window.location = "functions.php?state=" + val +"&fun="+fun+ "&address="+address;
				}

			} 
			else
			{
				alert("Select What Information You Want To Change");
			}
		}
		function addDealer(val)
		{
			var name=document.getElementById("dealer-name").value;
			var email=document.getElementById("dealer-email").value;
			var address=document.getElementById("dealer-address").value;
			var contact=document.getElementById("dealer-contact").value;
			var e1 = document.getElementById("cityDropdown");
			var State = e1.options[e1.selectedIndex].value;
			var e2 = document.getElementById("cityList");
			var city = e2.options[e2.selectedIndex].value;
			if(name != "" && email != "" && address != "" && contact != "")
			{
				alert(name)
				window.location = "functions.php?state=" + val +"&name="+name+ "&email="+email + "&address="+address +"&contact="+contact + "&State="+State + "&city="+city ;
			}
			else
			{
				alert("please enter all the details");
			}

		}
		function removeDealer(val)
		{
			var e1 = document.getElementById("Citydropdown");
			var fun1 = e1.options[e1.selectedIndex].value;
			var e2 = document.getElementById("city-List");
			var city = e2.options[e2.selectedIndex].value;
			var e3= document.getElementById("name-list");
			var dealer = e3.options[e3.selectedIndex].value;

			if(fun1 != "SELECT STATE" && city != "SELECT CITY" && dealer != "SELECT NAME")
			{
			window.location = "functions.php?state=" + val +"&city="+city + "&dealer="+dealer;
			}
			else
			{
			alert("Enter All The Details");
			}
		}

		function changeCredentials(val)
		{
			alert(val);
			var e = document.getElementById("credentials");
			var fun = e.options[e.selectedIndex].value;


			if(fun == "username")
			{
				alert(fun);
				var user=document.getElementById("Username").value;
				alert(user);
				window.location = "functions.php?state=" + val +"&fun="+fun +"&user="+user ;

			}
			else if(fun == "password")
			{
				var pass=document.getElementById("Password").value;
				var confPass=document.getElementById("ConfPass").value;
				if(pass == confPass)
				{
				window.location = "functions.php?state=" + val +"&fun="+fun + "&pass="+pass ;
				}
				else
				{
					alert("password is not matching");
				}
			}
			else
			{
				alert("Select What To Change");
			}
		}

		function changePrice(val)
		{
			var e = document.getElementById("tile-name");
			var fun = e.options[e.selectedIndex].value;
			var newPrice=document.getElementById("new-price").value;
			alert(fun);
			alert(newPrice);

			if(newPrice != "")
			{
			window.location = "functions.php?state=" + val +"&tile="+fun + "&newPrice="+newPrice ;
			}
			else
			{
				alert("enter new price");
			}

		}
	</script>
</body>
</html>