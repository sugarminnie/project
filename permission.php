<?php
if (isset($_SESSION['user_username'])) {
  echo "<li><a href='./upload/$row[img_product]' class='image-popup'><span class='arrow_expand'></span></a></li>";
  //echo "<li><a href='#'><span class='icon_heart_alt'></span></a></li>";
  echo "<li><a href='./product-details.php?product_id=$row[product_id]' onclick='$confirm'><span class='icon_bag_alt'></span></a></li>";
} else {
  echo "<li><a href='./upload/$row[img_product]' class='image-popup'><span class='arrow_expand'></span></a></li>";
  //echo "<li><a href='#'><span class='icon_heart_alt'></span></a></li>";
  echo "<li><a href='./login.php' onclick='$confirm'><span class='icon_bag_alt'></span></a></li>";
}
?>