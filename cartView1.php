<?php
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="cartView1.css">
</head>

<body>
<div class="alignment">
  <h1><i class="jQuery">jQuery</i> drawers</h1>
  <p><i class="jQuery">jQuery</i> reusable drawers, opens on click/tap!</p>
  <div class="drawer-btn-cont cf">
    <div class="login sidebar-btn grid-4 col">
      <a href="#" class="drawer-btn drawer-btn-ready">
        <i class="fa fa-user"></i>
      </a>
      <section class="login-drawer drawer">
        <h1 class="drawer-heading">
          Account Login
        </h1>
        <label for="email">Email:</label>
        <input type="email" placeholder="john.smith@gmail.com" id="email" required>
        <label for="password">Password:</label>
        <input type="password" id="password">
        <div class="drawer-btn-bg">
          <input type="submit" value="Login">
        </div>
        <div class="forgotten-password">
          <a href="#">Forgotten password?</a>
        </div>
      </section>
    </div>
    <div class="search sidebar-btn grid-4 col">
      <a href="#" class="drawer-btn drawer-btn-ready">
        <i class="fa fa-search"></i>
      </a>
      <section class="search-drawer drawer cf">
        <input type="search" placeholder="Search">
        <input type="submit" value="&#xf002;" class="fa">
      </section>
    </div>
    <div class="cart sidebar-btn grid-4 col">
      <a href="#" class="drawer-btn drawer-btn-ready">
        <i class="fa fa-shopping-cart"></i>
      </a>
      <section class="cart-drawer drawer">
        <ul class="product-item-list ul-reset">
          <li class="product-item cf">
            <div class="product-item-image">
              <div style="height: 0; padding-bottom: 100%; background-color: lightgrey;">
                <i class="fa fa-camera"></i>
              </div>
            </div>
            <div class="product-item-details">
              <div class="product-item-title">
                <a href="#">Product title</a>
              </div>
              <div class="product-item-price">
                &pound;149.99
              </div>
              <div class="product-item-qty">
                QTY: 1
              </div>
            </div>
          </li>
          <li class="product-item cf">
            <div class="product-item-image">
              <div style="height: 0; padding-bottom: 100%; background-color: lightgrey;">
                <i class="fa fa-camera"></i>
              </div>
            </div>
            <div class="product-item-details">
              <div class="product-item-title">
                <a href="#">Product title</a>
              </div>
              <div class="product-item-price">
                &pound;189.99
              </div>
              <div class="product-item-qty">
                QTY: 1
              </div>
            </div>
          </li>
        </ul>
        <div class="cart-total cf">
          <div class="cart-item-count">
            2 items in your cart
          </div>
          <div class="cart-total-price">
            Total &pound;339.98
          </div>
        </div>
        <div class="cart-btn-cont cf">
          <div class="cart-btn">
            <a href="#" class="cart-view-btn">View Cart</a>
          </div>
          <div class="cart-btn">
            <div class="drawer-btn-bg">
              <a href="#" class="cart-checkout-btn">Checkout</a>
            </div>
          </div>
        </div>
      </section>
    </div>
  </div>
</div>
<script>
	var drwrBtnCont = '.drawer-btn-cont',
    drwrBtn = '.drawer-btn',
    drwrBtnAct = 'drawer-btn-active',
    drwr = '.drawer',
    drwrDis = '.drawer-dismiss';

$(drwrBtn).click(function(e) {
  e.preventDefault();
  e.stopPropagation();
  if ($(this).hasClass(drwrBtnAct)) {
    $(drwr).hide();
    $(this).removeClass(drwrBtnAct);
  } else {
    $(drwr).hide();
    $(drwrBtn).removeClass(drwrBtnAct);
    $(this).addClass(drwrBtnAct);
    $(this).parent().find(drwr).show();
  }
});

$(document).mousedown(function(e) {
  if ($(drwrBtnCont).css('display') == 'block') {
    if (!$(drwrBtnCont).is(e.target) && $(drwrBtnCont).has(e.target).length === 0) {
      $(drwr).hide();
      $(drwrBtn).removeClass(drwrBtnAct);
    }
  }
});

// optional dismiss button
$(drwrDis).click(function() {
  $(this).parent(drwr).hide();
  $(drwrBtn).removeClass(drwrBtnAct);
});
</script>
</body>
</html>