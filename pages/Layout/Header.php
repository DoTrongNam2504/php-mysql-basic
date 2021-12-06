<?php 


$query1 = "SELECT * FROM category  ORDER BY id_category ";
 $row = mysqli_query($con, $query1);


 if(isset($_GET['trang']) && $_GET['trang'] =='dangxuat'){
 	unset($_SESSION['dangnhap']);
 	unset($_SESSION['dangky']);
 	unset($_SESSION['cart']);
 	header("Location: index.php");
 }

?>
<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href="#"><i class="fa fa-phone"></i> 0384640190</a></li>
								<li><a href="#"><i class="fa fa-envelope"></i> dotrongnam2307200@gmail.com</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header_top-->
		
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
							<a href="index.html"><img src="template/images/home/logo.png" alt="" /></a>
						</div>
						
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">


								<li><a href="giohang.html"><i class="fa fa-shopping-cart"></i> Giỏ hàng</a>
									<?php if(isset($_SESSION['cart'])) {?>
									<span class="number-cart"><?php echo count($_SESSION['cart']); ?></span>
									<?php }else { ?>
										<span class="number-cart">0</span>
									<?php } ?>
								</li>


								<?php if(isset($_SESSION['dangnhap']) || isset($_SESSION['dangky'])){ ?>
									<li class="dropdown">
										<a href="#"><i class="fa fa-user"></i>
										<?php if(isset($_SESSION['dangnhap'])) { ?>

										 	<?php echo $_SESSION['dangnhap']; ?>

										 <?php } else if(isset($_SESSION['dangky'])) {?>
										 	<?php echo $_SESSION['dangky']; ?>
										 <?php }else if(isset($_SESSION['dangky']) && isset($_SESSION['dangnhap'])){ ?>
										 		<?php echo $_SESSION['dangky']; ?>
										 <?php } ?>
										 <i class="fa fa-angle-down"></i></a>


										<ul role="menu" class="sub-menu">
	                                        <li><a href="dangxuat.html">Đăng xuất</a></li>
	                                        <li><a href="doimatkhau.html">Đổi mật khẩu</a></li>
	                                        <li><a href="doithongtintk.html">Đổi thông tin tài khoản</a></li>
											
                                    </ul>
									</li>
								<?php }else{ ?>
									<li>
										<a href="dangnhap.html"><i class="fa fa-lock"></i> Đăng Nhập</a>
									</li>
								<?php } ?>
								
								<li><a href="dangki.html"><i class="fa fa-user"></i> Đăng kí</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
	
		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="index.php" class="active">Trang chủ</a></li>
								<?php 

								if(isset($_GET['id'])){
									$id = $_GET['id'];
								 ?>

								<?php while($row_category= mysqli_fetch_array($row)){ ?>

									
									<li >
										<a <?php if( $row_category['id_category']==$id){echo'class="active"';}else{'';}?> href="danh-muc/<?php echo $row_category['id_category'].'.html'; ?>"> 

											<?php echo $row_category['category_name']; ?>
											
										</a>
									</li> 

								<?php } ?>

								<?php }else{ ?>
									<?php while($row_category= mysqli_fetch_array($row)){ ?>

										
									<li ><a href="danh-muc/<?php echo $row_category['id_category'].'.html'; ?>"> <?php echo $row_category['category_name']; ?></a></li> 

									<?php } ?>


								<?php } ?>

								<li ><a href="baiviet.html">Bài viết</a>
                                    
                                </li> 
								<li><a href="lienhe.html">Liên hệ</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3">
						<form action="" method="GET">
						<div class="search_box pull-right">
							<input type="text" placeholder="Tìm kiếm....." name="keyword" />
						</div></form>
					</div>
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->