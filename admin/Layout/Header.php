<?php 
    
    if(isset($_GET['admin_control']) && $_GET['admin_control']=='dangxuat'){
        unset($_SESSION['dangnhap_admin']);
        header('Location:login.php');
    }



 ?>
 
<!--header start-->
<header class="header fixed-top clearfix">
<!--logo start-->
<div class="brand">
    <a href="index.php" class="logo">
        ADMIN
    </a>
    <div class="sidebar-toggle-box">
        <div class="fa fa-bars"></div>
    </div>
</div>
<!--logo end-->
<div class="nav notify-row" id="top_menu">
   
</div>
<div class="top-nav clearfix">
    <!--search & user info start-->
    <ul class="nav pull-right top-menu">
        <li>
            <input type="text" class="form-control search" placeholder=" Search">
        </li>
        <!-- user login dropdown start-->
        <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                <img alt="" src="template/images/2.png">

                <span class="username"><?php echo $_SESSION['dangnhap_admin']; ?></span>
                <b class="caret"></b>
            </a>
            <ul class="dropdown-menu extended logout">
               
                <li><a href="?admin_control=dangxuat"><i class="fa fa-key"></i> Đăng xuất</a></li>
            </ul>
        </li>
        <!-- user login dropdown end -->
       
    </ul>
    <!--search & user info end-->
</div>
</header>