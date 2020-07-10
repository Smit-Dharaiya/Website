<?php

    include 'connection.php';
    
    $sql1="SELECT `value` from `admin` where `key`='Customer Care Number'";
    $res=mysqli_query($con,$sql1);
    if(!$res)
    {
      print("error");
    }
    else
    {
    if (mysqli_num_rows($res) > 0)
    {
    $row=mysqli_fetch_array($res);
    
    echo '<div class="aboutus col-md-12" style="color: white">
    <div class="ccare col-md-4 col-sm-12 wow bounceInUp" style="background-color: rgb(118,109,247);">
    <center>
     <p style="font-size: 20px "><i class="fa fa-phone fa-spin"></i> Customer Care Number</p>
     <p style="font-size: 30px ;  font-weight: bold">'.$row[0].'</p></center>
    </div>';
    
    }
    else
    {
    print("zero rows");
    }
    }
    $sql2="SELECT `value` from `admin` where `key`='Email'";
    $res=mysqli_query($con,$sql2);
    $row=mysqli_fetch_array($res);
    echo '<div class="email col-md-4 col-sm-12 wow bounceInUp" style="background-color: #00CC66">
    <center>
     <p style="font-size: 20px "><i class="fa fa-envelope-o fa-spin"></i> Email</p>
     <p style="font-size: 30px ; font-weight: bold">'.$row[0].'</p></center>
    </div>';
    $sql3="SELECT `value` from `admin` where `key`='Contact Us'";
    $res=mysqli_query($con,$sql3);
    $row=mysqli_fetch_array($res);
    echo '<div class="contus col-md-4 col-sm-12 wow bounceInUp" style="background-color: #CC0066">
    <center>
     <p style="font-size: 20px "><i class="fa fa-mobile fa-spin"></i> Contact Us</p>
     <p>'.$row[0].'</p></center>
    </div>
  </div>';
    
?>


<div class="final col-md-12 wow bounceInUp" style="background-color: #202020">
  <div class="corporate col-md-3">
    <center><p style="font-weight: bold;font-size:30px;border-bottom: 2px red solid">CORPORATE</p></center>
    <ul>
      <li style="list-style: none;"><a href="#" style="color: white;text-decoration: none" role="button">Company Profile</li></a>
      <li style="list-style: none;"><a href="#" style="color: white;text-decoration: none" role="button">Marbel Division</li></a>
      <li style="list-style: none;"><a href="#" style="color: white;text-decoration: none" role="button">Dealer Connect</li></a>
      <li style="list-style: none;"><a href="#" style="color: white;text-decoration: none" role="button">Office</li></a>  
      <li style="list-style: none;"><a href="#" style="color: white;text-decoration: none" role="button">Careers</li></a>
    </ul>
  </div>
  <div class="pro col-md-3">
    <center><p style="font-weight: bold;font-size:30px; border-bottom: 2px yellow solid">PRODUCTS</p></center>
    <ul>
      <li style="list-style: none;"><a href="#" style="color: white;text-decoration: none;"role="button">Ceramic Floor Tiles</li></a>
      <li style="list-style: none;"><a href="#" style="color: white; text-decoration: none;" role="button">Ceramic Wall Tiles</li></a>
      <li style="list-style: none;"><a href="#" style="color: white;text-decoration: none" role="button">Glazed Vitrified Tiles</li></a>
      <li style="list-style: none;"><a href="#" style="color: white;text-decoration: none" role="button">Vitrified DCH Tiles</li></a>
      <li style="list-style: none;"><a href="#" style="color: white;text-decoration: none" role="button">Vitrified Heavy Duty Tiles</li></a>
      <li style="list-style: none;"><a href="#" style="color: white;text-decoration: none" role="button">Vitrified SST Tiles</li></a>
    </ul>
  </div>
  <div class="need col-md-3">
    <center><p style="font-weight: bold;font-size:30px;border-bottom: 2px red solid">NEED HELP ?</p></center>
    <ul>
      <li style="list-style:none;"><a href="#" style="color: white;text-decoration: none" role="button">Exclusive Showroom</li></a>
      <li style="list-style:none;"><a href="#" style="color: white;text-decoration: none" role="button">Franchise</li></a>
      <li style="list-style:none;"><a href="#" style="color: white;text-decoration: none" role="button">Dealer Locator</li></a>
      <li style="list-style:none;"><a href="#" style="color: white;text-decoration: none" role="button">Download Catalogs</li></a>
      <li style="list-style:none;"><a href="#" style="color: white;text-decoration: none" role="button">Tiles Calculator</li></a>
      <li style="list-style:none;"><a href="#" style="color: white;text-decoration: none" role="button">Contact Us</li></a>
    </ul>
  </div>
  <div class="quick col-md-3">
    <center><p style="font-weight: bold;font-size:30px;border-bottom: 2px yellow solid">QUICK LINKS</p></center>
    <ul>
      <li style="list-style:none;"><a href="#" style="color: white;text-decoration: none" role="button">New Launch</li></a>
      <li style="list-style:none;"><a href="#" style="color: white;text-decoration: none" role="button">Floor Tiles</li></a>
      <li style="list-style:none;"><a href="#" style="color: white;text-decoration: none" role="button">Wall Tiless</li></a>
      <li style="list-style:none;"><a href="#" style="color: white;text-decoration: none" role="button">Picture Gallery</li></a>
    </ul>
  </div>
</div>
<div class="over col-md-12" style="background-color: #202020">
 <pre style="color: white">        
 © 2017 Dharaiyas' Text-Tiles. All right reserved | Design & Developed by <b style="color: yellow;font-size:20px ">DHARAIYA INFOTECH </b> 
 </pre>
</div>

