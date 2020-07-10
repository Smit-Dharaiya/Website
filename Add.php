<?php
session_start();
include('connection.php');
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        $uploadOk = 1;
    } else {
        $uploadOk = 0;
    }
if(basename($_FILES["fileToUpload"]["name"])=="")
{
 echo '<script>alert("choose image");</script>.';
}
if (file_exists($target_file) && $target_file!="uploads/") {
    echo '<script>alert("Sorry, Image File already exists");</script>.';
    $uploadOk = 0;
}
if ($_FILES["fileToUpload"]["size"] > 5000000) {
    $uploadOk = 0;
}

if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    $uploadOk = 0;
}

if ($uploadOk == 0) {
    echo '<script>alert("Sorry, your file was not uploaded");</script>.';

} 
else 
    {
    
        
        if(isset($_POST["Tile_Type"]) && isset($_POST["Category"]) && isset($_POST["Finish"]) && isset($_POST["Size"]) && isset($_POST["Name"]))
        {    
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file))
         {
        $name=$_POST["Name"];
        
        $tile_type=$_POST["Tile_Type"];
        
        $category=$_POST["Category"];
       
        $finish=$_POST["Finish"];

        $size=$_POST["Size"];

        $price=$_POST["Price"];

        $sql="INSERT INTO `by_space`(`Name`, `Image`, `Tile_Type`, `Category`, `Finish`, `Size`, `Price`) VALUES ('$name','$target_file','$tile_type','$category','$finish','$size','$price')";
        mysqli_query($con,$sql);
         }
        }
     else {
        echo '<script>alert("Please Fill Out All The Details");</script>';
    }
}   

}

?>