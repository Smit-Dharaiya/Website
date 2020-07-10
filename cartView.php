<?php
?>
<!DOCTYPE html>
<html>
<head>
	
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="cartView.css">
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="Footer.css">
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
  <div class="shopping-cart">
  <!-- Title -->
  <div class="title">
    Shopping Bag
  </div>
 
  <table>
    <tr>
    <center>
    <th>Product Name</th>
    <th>Price</th>
    <th>Quantity</th>
    <th>Total Price</th>
    </center>
    </tr>

  <div class="item">
  <tr> 
      <td>
      <div class="description">
      <span>Our Legacy</span>
      <span>Brushed Scarf</span>
      <span>Brown</span>
      </div>
      </td>

      <td>
         <div class="price">$349</div>
      </td>

      <td>
      <div class="quantity">
      <button class="plus-btn" type="button" name="button">
      <span style="font-weight: bold;">+</span>
      </button>
      <input type="text" name="name" value="1" size="1">
      <button class="minus-btn" type="button" name="button">
      <span style="font-weight: bold;">-</span>
      </button>
      </div>
     </td>
 
   
  </div>
 </table>
 </div>

<script>
	$('.like-btn').on('click', function() {
   $(this).toggleClass('is-active');
});
	$('.minus-btn').on('click', function(e) {
    e.preventDefault();
    var $this = $(this);
    var $input = $this.closest('div').find('input');
    var value = parseInt($input.val());
 
    if (value >= 1) {
        value = value - 1;
    } else {
        value = 0;
    }
 
  $input.val(value);
 
});
 
$('.plus-btn').on('click', function(e) {
    e.preventDefault();
    var $this = $(this);
    var $input = $this.closest('div').find('input');
    var value = parseInt($input.val());
 
    if (value <= 1000) {
        value = value + 1;
    } else {
        value =100;
    }
 
    $input.val(value);
});
</script>
</body>
</html>