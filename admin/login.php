<?php 

	include('../config/config.php');
	session_start();


	if(isset($_POST['login'])){
		$email = $_POST['email'];
		$password =md5( $_POST['password']);
		$sql ="SELECT * FROM admin WHERE email = '".$email."' AND password ='".$password."'";
		$row = mysqli_query($con,$sql);
		$row_admin = mysqli_fetch_array($row);
		$count = mysqli_num_rows($row);
		if($count >0){
			
			$_SESSION['dangnhap_admin'] = $row_admin['admin_name'];
			header("Location:index.php");

		}
		else{

			echo '<script> alert("Tài khoản hoặc mật khẩu chưa đúng")</script>';
			header("Location:login.php");
		}
	}

 ?>
<!DOCTYPE html>
<head>
<title>Đăng nhập trang quản trị</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link rel="stylesheet" href="template/css/bootstrap.min.css" >
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href="template/css/style.css" rel='stylesheet' type='text/css' />
<link href="template/css/style-responsive.css" rel="stylesheet"/>
<!-- font CSS -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href="template/css/font.css" type="text/css"/>
<link href="template/css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<script src="js/jquery2.0.3.min.js"></script>
</head>
<body>
<div class="log-w3">
<div class="w3layouts-main">
	<h2>Hệ thống quản trị</h2>
		<form action="" method="post" autocomplete="off">
			<input type="email" class="ggg" name="email" placeholder="E-MAIL" required="">
			<input type="password" class="ggg" name="password" placeholder="PASSWORD" required="">
			
				<input type="submit" value="Sign In" name="login">
		</form>
</div>
</div>
<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
<script src="template/js/bootstrap.js"></script>
<script src="template/js/jquery.dcjqaccordion.2.7.js"></script>
<script src="template/js/scripts.js"></script>
<script src="template/js/jquery.slimscroll.js"></script>
<script src="template/js/jquery.nicescroll.js"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="template/js/flot-chart/excanvas.min.js"></script><![endif]-->
<script src="template/js/jquery.scrollTo.js"></script>
</body>
</html>
