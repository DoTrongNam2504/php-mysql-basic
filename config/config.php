<?php
$con = mysqli_connect("localhost","root","","web-php-basic");

// Check connection
if (mysqli_connect_errno()) {
  echo "Lỗi connect MySQL: " . mysqli_connect_error();
  exit();
}
?>