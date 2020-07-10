<?php
	session_start();
	include('connection.php');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- <link rel="stylesheet" href="feedback.css"> -->
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
<body >
	<style>
		select
		{
			width:300px;
		}
	</style>
	<?php
		 include('header.php');
	?>
     <div class="s2" style="margin-top: 150px;">
      <center>
      <form action="Add.php" method="post" enctype="multipart/form-data" style="background-color: silver; width:500px" >
        Tile Name :*<br><input type="text" name="Name" size="50" required="true" style="width: 300px;"><br><br>
        Type *<br><select name="Tile_Type" >
        <option disabled selected>SELECT TYPE</option>
        <option value="WALL TILES">WALL TILES</option>
        <option value="OutDoor Tiles">OUTDOOR TILES</option>
        <option value="Floor Tiles">FLOOR TILES</option>
        <option value="Ceramic Tiles">CERAMIC TILES</option>
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
            })
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
 	<input type="submit"  name="submit"><br><br>
    <br><br><br><br>
</form> 
      </center>
    </div>
    <?php
    include('Footer.php');
    ?>
</body>
</html>