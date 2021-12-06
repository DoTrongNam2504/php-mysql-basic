<?php 
	session_start();
	include('../../config/config.php');


	if(isset($_POST['register'])){

		$user_name = $_POST['user_name'];

		$password =md5( $_POST['password']);


		$email = $_POST['email'];

		$phone = $_POST['phone'];

		$address = $_POST['address'];


		$sql ="INSERT INTO user(user_name,password,email,phone,address) values('".$user_name."','".$password."', '".$email."',  '".$phone."','".$address."')"; 
		$row = mysqli_query($con,$sql);
			// tự động lưu id của người dùng khi người dùng đăng ký tài khoản
			$_SESSION['user_id']= mysqli_insert_id($con);
			$_SESSION['dangky']= $user_name;

			header("Location:../../index.html");
	}



	if(isset($_POST['login'])){

		

		$password =md5($_POST['password']);

		$email = $_POST['email'];

		

		$sql ="SELECT * FROM user where email = '".$email."' and password = '".$password."'";
		$row = mysqli_query($con, $sql);
		$count = mysqli_num_rows($row);
		if($count >0){
			$row_dangnhap = mysqli_fetch_array($row);
			$_SESSION['dangnhap'] = $row_dangnhap['user_name'];
			$_SESSION['user_id'] = $row_dangnhap['user_id'];
			header("Location:../../index.php");

		}
		else{

			header("Location:../../dangnhap.html");
		}
	}


	if(isset($_POST['Update-pass'])){

		
		$email = $_POST['email'];
		$password_old =md5($_POST['password_old']);
		$password_new =md5($_POST['password_new']);

		$sql ="SELECT * FROM user where email = '".$email."' and password = '".$password_old."'";
		$row = mysqli_query($con, $sql);
		$count = mysqli_num_rows($row);
		if($count >0){

			$sql ="UPDATE user SET password = '".$password_new."'";
			$row = mysqli_query($con, $sql);
			
			header("Location:../../index.html");

		}
			
		else{
			
			header("Location:../../doimatkhau.html");
		}
			
	}


	if(isset($_POST['update-tt'])){

		
		$user_name = $_POST['user_name'];

		$email = $_POST['email'];

		$phone = $_POST['phone'];

		$address = $_POST['address'];
		

		$sql ="UPDATE user SET 
				user_name = '".$user_name."',
				email = '".$email."',
				phone = '".$phone."',
				address = '".$address."' WHERE user_id ='".$_SESSION['user_id']."'
				";
		$row = mysqli_query($con, $sql);

		$_SESSION['dangky']= $user_name;
		$_SESSION['dangnhap']= $user_name;
		header("Location:../../index.html");

		}
			
	
	
	

 ?>