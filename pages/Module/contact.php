<?php 
	session_start();
	include('../../config/config.php');


	if(isset($_POST['submit_contact'])){

		$user_name = $_POST['name'];


		$email = $_POST['email'];

		$phone = $_POST['phone'];

		$address = $_POST['address'];
		$message = $_POST['message'];


		$sql ="INSERT INTO contact(contact_name,contact_email,contact_phone,contact_address,contact_note) values('".$user_name."', '".$email."',  '".$phone."','".$address."','".$message."')"; 
		$row = mysqli_query($con,$sql);

	}
		echo '<script language="javascript">';
		echo 'alert("Cảm ơn bạn đã gửi liên hệ")';
		echo '</script>';
		header("Location:../../index.html");



 ?>