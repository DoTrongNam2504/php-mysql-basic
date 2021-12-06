<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <base href="http://localhost/web-php-basic/">
    <title>Home | E-Shopper</title>
    <link href="template/css/bootstrap.min.css" rel="stylesheet">
    <link href="template/css/font-awesome.min.css" rel="stylesheet">
    <link href="template/css/prettyPhoto.css" rel="stylesheet">
    <link href="template/css/price-range.css" rel="stylesheet">
    <link href="template/css/animate.css" rel="stylesheet">
	<link href="template/css/main.css" rel="stylesheet">
	<link href="template/css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="template/images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="template/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="template/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="template/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="template/images/ico/apple-touch-icon-57-precomposed.png">
    <!-- Latest compiled and minified CSS -->
   

    
    <?php 
    
    session_start();

    function make_url($string)
    {
        $string = trim($string);
        $string = str_replace(' ','-',$string);
        $string = strtolower($string);
       $string = preg_replace('/(á|à|ả|ạ|ã|ă|ắ|ằ|ẳ|ẵ|ặ|â|ấ|ầ|ẩ|ẫ|ậ/)', 'a', $string);
       $string = preg_replace('/(é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ/)', 'e', $string);
       $string = preg_replace('/(i|í|ì|ỉ|ĩ|ị/)', 'i');
       $string = preg_replace('/(ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ/)', 'o', $string);
       $string = preg_replace('/(ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự/)', 'u', $string);
       $string = preg_replace('/(ý|ỳ|ỷ|ỹ|ỵ/)', 'y', $string);
        return $string;
    }

 ?>
</head><!--/head-->

<body>
	
	<?php 
    include("config/config.php");
	include("pages/Layout/Header.php");
	include("pages/Layout/Main.php");
	include("pages/Layout/Footer.php");
	?>


    
    <script src="template/js/jquery.js"></script>
	<script src="template/js/bootstrap.min.js"></script>
	<script src="template/js/jquery.scrollUp.min.js"></script>
	<script src="template/js/price-range.js"></script>
    <script src="template/js/jquery.prettyPhoto.js"></script>
    <script src="template/js/main.js"></script>
</body>
</html>