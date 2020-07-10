
	<nav class="navbar navbar-expand-md navbar-dark fixed-top" style="height: 100px;">
  <!-- Brand -->
  <img class="logo" src="Tiles/Capture8.png">

  <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Navbar links -->
  <div class="collapse navbar-collapse nav-item " id="collapsibleNavbar">
    <ul class="navbar-nav main-ul">
      <li class="nav-item ">
        <a class="nav-link " href="Projectnav.php">Home</a>
      </li>
       <div class="menu">
      <i class="fa fa-bars fa-2x fa-fmw"></i>
    </div>
      <li class="dropdown more">
      <a href="#" class="dropdown-toggle nav-link product" data-toggle="dropdown" role="button" aria-haspopup="true"
      aria-expanded="false">Products<span class="caret"> </span></a>
      <ul class="wow fadeInDown dropdown-menu dropdown-menu1">
          <div class="drop1">
     <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">BY SPACE <span class="caret">
          </span></a>
           <ul class="d2">
              <li><a href="TilesPage2.php ? uid=LIVING ROOM TILES & uid2= & uid3= " role="button">LIVING ROOM</a></li>
             <li><a href="TilesPage2.php ? uid=KITCHEN TILES & uid2= & uid3= " role="button">KITCHEN</a></li>
             <li><a href="TilesPage2.php ? uid=BEDROOM TILES & uid2= & uid3= " role="button">BEDROOM</a></li>
             <li><a href="TilesPage2.php ? uid=BATHROOM TILES & uid2= & uid3= " role="button">BATHROOM</a></li>
             <li><a href="TilesPage2.php ? uid=OUTDOOR TILES & uid2= & uid3= " role="button">OUTDOOR </a></li>
             <li><a href="TilesPage2.php ? uid=COMMERCIAL TILES & uid2= & uid3= " role="button">COMMERCIAL</a></li>
           </ul> 
           </li>
         </div>
         <div class="drop2">
      <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">BY CATEGORY <span class="caret">
          </span></a>
          <ul class="d2">
             <?php
             include('connection.php');
              $a="SELECT * FROM `categories` WHERE 1";
              $res=mysqli_query($con,$a);
              while($row=mysqli_fetch_array($res))
              {
                  echo '<li><a href="TilesPage2.php ? uid2='.$row[0].' & uid= & uid3= " role="button">'.$row[0].'</a></li>';
              }
             ?>
          </ul>
          </li>
        </div>
        <div class="drop3">
      <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">BY FINISH
          <span class="caret">
          </span></a>
          <ul class="d2">
            <?php
            $a="SELECT * FROM `finish` WHERE 1";
            $res=mysqli_query($con,$a);
            while($row=mysqli_fetch_array($res))
            {
                echo '<li><a href="TilesPage2.php ? uid3='.$row[0].' & uid= & uid2= "role="button">'.$row[0].'</a></li>';
            }
            ?>
          </ul>
          </li>
        </div>
        <div class="drop4">
      <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">BY APPLICATION
            <span class="caret"> </span></a>
            <ul class="d2">
              <li><a href="TilesPage2.php ? uid=FLOOR TILES & uid2= & uid3= " role="button">FLOOR TILES</a></li>
              <li><a href="TilesPage2.php ? uid=WALL TILES & uid2= & uid3= " role="button">WALL TILES </a></li>
            </ul>
          </li>
          <br>
        </div>
      </ul> 
      </li>      
      <li class="nav-item">
        <a class="nav-link " href="TilesCalculator.php">Tiles Calculator</a>
      </li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown" role="button" aria-haspopup="true" 
        aria-expanded="false">Help<span class="caret"> </span></a>
           <ul class="wow fadeInDown  dropdown-menu d3">
             <!-- <li><a href="#" role="button">EXCLUSIVE SHOWROOM</a></li><hr> -->
             <li><a href="dealer.php ? u=DEALER LOCATOR" role="button" >DEALER LOCATOR</a></li><hr>
             <li><a href="feedback.php ? u=FEEDBACK" role="button">FEEDBACK</a></li><hr>
             <li><a href="contact_us.php ? u=CONTACT US" role="button">CONTACT</a></li><hr>
             <!-- <li><a href="#" role="button">FRANCHISE</a></li><hr> -->
           </ul> 
      </li>
     <!--  <li class="nav-item">
        <a class="nav-link " href="#About">About Us</a>
      </li> -->
     
      <li class="nav-item lgin">
        <?php 
        if(isset($_SESSION['UserName']))
        {
        echo '<a class="nav-link lgin_a inline" href="logout.php"><i class="fa lgin fa-user-circle-o" style="font-size:30px;color:white"></i> '.$_SESSION['UserName'].'</a>';
        }
        else
        {
        echo '<a class="nav-link lgin_a" href="login.php"><i class="fa lgin fa-user-circle-o" style="font-size:30px;color:white"></i> Log In</a>';
        }
        ?>
      </li>
      
        <?php
          if(isset($_SESSION['UserName']))
          {
            $namee="smit_dharaiya";
            $namee2="poojan_d";
            if($namee==$_SESSION['UserName'] || $namee2==$_SESSION['UserName']){
            echo '<li class="nav-item">';
            echo '<a class="nav-link" href="forms.php"><i class="fa  fa-unlock"></i> Panel </a>';
            echo '</li>';
          }
          }
        ?>
       
    </ul>
    <hr>
  </div> 
</nav>
<script>
  $('.dropdown-toggle').click(function() {
    var location = $(this).attr('href');
    window.location.href = location;
    return false;
});
    </script>

<script>
$(function () {
    
    "use strict";
    
    $("nav .menu").on("click", function () {
        
        $("nav .nav-item .main-ul").slideToggle();
    });
    
    console.log($(window).width());
    
    $(window).on("resize", function () {
        
        if ($(window).width() >= 992) {

            $("nav .nav-item .main-ul").fadeIn();
        }
        
    });
    
    $("nav .nav-item ul .more").on("click", function () {
        
        $("nav .nav-item ul .more .drop-down").slideToggle();
    });
    
});
</script>
 

