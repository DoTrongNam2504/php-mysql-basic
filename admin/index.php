<?php 
	session_start();
	if(!isset($_SESSION['dangnhap_admin'])){
		header('Location: login.php');
	}
 ?>
<!DOCTYPE html>
<head>
<title>Trang quản lý</title>
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
<link rel="stylesheet" href="template/css/morris.css" type="text/css"/>
<!-- calendar -->
<link rel="stylesheet" href="template/css/monthly.css">
<!-- //calendar -->
<!-- //font-awesome icons -->
<script src="template/js/jquery2.0.3.min.js"></script>
<script src="template/js/raphael-min.js"></script>
<script src="template/js/morris.js"></script>
</head>
<body>
<section id="container">

<?php include ('../config/config.php'); ?>

<!--header start-->
<?php include 'Layout/Header.php'; ?>
<!--header end-->
<!--sidebar start-->
<?php include 'Layout/Menu_Sidebar.php'; ?>
<!--sidebar end-->
<!--main content start-->
<section id="main-content">
<?php 
	if(isset($_GET['admin_control'])){
		$url = $_GET['admin_control'];
	}else{
		$url = '';
	}

	if(isset($_GET['query'])){
		$query = $_GET['query'];
	}else{
		$query = '';
	}



	if( $url == 'quanlidanhmuc'){

		if($query =='add'){
			include 'View/Category/add.php';
		}
		if($query =='edit'){
			include 'View/Category/edit.php';
		}
			
		else if($query ==''){
			
			include 'View/Category/index.php';

		}
		

	}
	else if( $url == 'quanlisanpham'){

		if($query =='add'){

			include 'View/Product/add.php';

		}if($query =='edit'){
			include 'View/Product/edit.php';
		}else if($query ==''){

			include 'View/Product/index.php';
		}
	}

	else if( $url == 'quanlibaiviet'){

		if($query =='add'){

			include 'View/Articles/add.php';

		}if($query =='edit'){
			include 'View/Articles/edit.php';
		}else if($query ==''){

			include 'View/Articles/index.php';
		}
	}

	else if( $url == 'quanlithuonghieu'){

		if($query =='add'){

			include 'View/Brand/add.php';

		}if($query =='edit'){
			include 'View/Brand/edit.php';
		}else if($query ==''){
			include 'View/Brand/index.php';
		}
	}
	else if( $url == 'quanlidonhang'){

		if($query =='view'){

			include 'View/Payment/view.php';

		}else if($query ==''){

		include ("View/Payment/index.php");
		}
	}
	else if( $url == 'quanlitaikhoan'){

		if($query =='add'){

			include 'View/Account/add.php';

		}
		if($query =='edit'){

			include 'View/Account/edit.php';
		}
		else if($query ==''){

			include 'View/Account/index.php';

		}
	}

	else{
		include 'Layout/Main.php';


	}



 ?>
 <!-- footer -->
  <?php include 'Layout/Footer.php'; ?>
  <!-- / footer -->
</section>
<!--main content end-->
</section>
<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
    <script src="https://cdn.ckeditor.com/4.17.1/standard/ckeditor.js"></script>
      <script>
            CKEDITOR.replace( 'description' );
            CKEDITOR.replace( 'content' );
            CKEDITOR.replace( 'baiviet_con' );
            CKEDITOR.replace( 'baiviet_desc' );
    </script>

<script src="template/js/bootstrap.js"></script>
<script src="template/js/jquery.dcjqaccordion.2.7.js"></script>
<script src="template/js/scripts.js"></script>
<script src="template/js/jquery.slimscroll.js"></script>
<script src="template/js/jquery.nicescroll.js"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="template/js/flot-chart/excanvas.min.js"></script><![endif]-->
<script src="template/js/jquery.scrollTo.js"></script>
<!-- morris JavaScript -->	

	<!-- //calendar -->
</body>
</html>
