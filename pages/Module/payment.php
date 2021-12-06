<?php 
	session_start();
	include('../../config/config.php');

if(isset($_POST['payment_end'])){
	$user_id = $_SESSION['user_id'];
	$code_card = RAND(0,9999);
	$insert_cart = "INSERT INTO  cart (user_id, code_card, cart_status) VALUE ('".$user_id."','".$code_card."',1)";
	$cart_query = mysqli_query($con, $insert_cart);
	if($insert_cart){
		foreach ($_SESSION['cart'] as $key => $value) {
			
			$product_id = $value['product_id'];
			$qty_buy = $value['product_qty'];
			$insert_order_dt ="INSERT INTO  cart_detail(code_card,product_id,qty_buy
		) VALUE ('".$code_card."','".$product_id."','".$qty_buy."')";
			mysqli_query($con, $insert_order_dt);


		}
	}


}
unset($_SESSION['cart']);
	echo '<script language="javascript">';
	echo 'alert("Cảm ơn bạn đã đặt hàng")';
	echo '</script>';
	header("Location:../../index.html");

 ?>	