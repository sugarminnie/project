<!-- Page Preloder -->
<div id="preloder">
  <div class="loader"></div>
</div>

<!-- Offcanvas Menu Begin -->
<div class="offcanvas-menu-overlay"></div>
<div class="offcanvas-menu-wrapper">
  <div class="offcanvas__close">+</div>
  <ul class="offcanvas__widget">
    <li><span class="icon_search search-switch"></span></li>
    <li><a href="#"><span class="icon_heart_alt"></span>
        <div class="tip">2</div>
      </a></li>
    <li><a href="./shop-cart.php"><span class="icon_bag_alt"></span>
        <div class="tip">2</div>
      </a></li>
  </ul>
  <div class="offcanvas__logo">
    <a href="./index.php" style="font-family: 'Finger Paint', cursive; font-size: 20px;">Luxury by Fon</a>
    <!-- <a href="./index.php"><img src="./assets/front-end/img/logo.png" alt=""></a> -->
  </div>
  <div id="mobile-menu-wrap"></div>
  <div class="offcanvas__auth">
    <a href="#">Login</a>
    <a href="#">Register</a>
  </div>
</div>
<!-- Offcanvas Menu End -->

<!-- Header Section Begin -->
<header class="header">
  <div class="container-fluid">
    <div class="row">
      <div class="col-xl-3 col-lg-2">
        <div class="header__logo">
          <a href="./index.php" style="font-family: 'Finger Paint', cursive; color: #111111; font-size: 20px;">Luxury by Fon</a>
          <!-- <a href="./index.php"><img src="./assets/front-end/img/logo.png" alt=""></a> -->
        </div>
      </div>
      <div class="col-xl-6 col-lg-7">
        <nav class="header__menu">
          <ul>
          <?php
          if (!isset($_SESSION['username_badminton'])) {
            ?>
            <li class="<?php if (basename($_SERVER['PHP_SELF']) == "index.php") {
                                                echo "active";
                                              } else {
                                                echo "";
                                              } ?>"><a href="./index.php">Home</a></li>
            <li><a href="#">Women’s</a></li>
            <li><a href="#">Men’s</a></li>
            <li class="<?= (basename($_SERVER['PHP_SELF']) == "shop.php") ? "active" : ""; ?>"><a href="./shop.php">Shop</a></li>
            <li><a href="#">Pages</a>
              <ul class="dropdown">
                <li><a href="./product-details.html">Product Details</a></li>
                <li><a href="./shop-cart.html">Shop Cart</a></li>
                <li><a href="./checkout.html">Checkout</a></li>
                <li><a href="./blog-details.html">Blog Details</a></li>
              </ul>
            </li>
            <li><a href="./blog.html">Blog</a></li>
            <li class="<?= (basename($_SERVER['PHP_SELF']) == "contact.php") ? "active" : ""; ?>"><a href="./contact.php">Contact</a></li>
            <?php
             } else {
             ?>
            <li class="<?php if (basename($_SERVER['PHP_SELF']) == "index.php") {
                                                echo "active";
                                              } else {
                                                echo "";
                                              } ?>"><a href="./index.php">Home</a></li>
            <li><a href="#">Women’s</a></li>
            <li><a href="#">Men’s</a></li>
            <li class="<?= (basename($_SERVER['PHP_SELF']) == "shop.php") ? "active" : ""; ?>"><a href="./shop.php">Shop</a></li>
            <li><a href="#">Pages</a>
              <ul class="dropdown">
                <li><a href="./product-details.html">Product Details</a></li>
                <li><a href="./shop-cart.html">Shop Cart</a></li>
                <li><a href="./checkout.html">Checkout</a></li>
                <li><a href="./blog-details.html">Blog Details</a></li>
              </ul>
            </li>
            <li><a href="./blog.html">Blog</a></li>
            <li class="<?= (basename($_SERVER['PHP_SELF']) == "contact.php") ? "active" : ""; ?>"><a href="./contact.php">Contact</a></li>
             <?php
             }
             ?>
          </ul>
        </nav>
      </div>
      <div class="col-lg-3">
        <div class="header__right">
          <div class="header__right__auth">
          <?php
          if (!isset($_SESSION['username_badminton'])) {
          ?>
            <a href="./login.php">Login</a>
            <a href="#">Register</a>
          <?php
          } else {
            echo "<a href='#' id='user_detail'>".$_SESSION["member_user"]."</a>";
            ?>
            <a href="./logout.php">ออกจากระบบ</a>
            <?php
          }
          ?>
          </div>
          <ul class="header__right__widget">
            <li><span class="icon_search search-switch"></span></li>
            <li><a href="#"><span class="icon_heart_alt"></span>
                <div class="tip">2</div>
              </a></li>
            <li><a href="./shop-cart.php"><span class="icon_bag_alt"></span>
                <div class="tip"><?php if(isset($_SESSION["shopping_cart"])) { echo count($_SESSION["shopping_cart"]); } else { echo '0';}?></div>
              </a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="canvas__open">
      <i class="fa fa-bars"></i>
    </div>
  </div>
</header>
<!-- Header Section End -->