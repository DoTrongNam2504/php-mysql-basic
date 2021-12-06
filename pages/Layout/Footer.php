<?php 
$query1 = "SELECT * FROM category  ORDER BY id_category LIMIT 5";
 $row = mysqli_query($con, $query1); ?>
	<footer id="footer"><!--Footer-->
		
		<div class="footer-widget">
			<div class="container">
				<div class="row">
					<div class="col-md-3">
						<div class="single-widget">
							<div class="logo ">
								<a href="index.html"><img src="template/images/home/logo.png" alt="" /></a>
							</div>
							<ul class="nav nav-pills nav-stacked" style="margin-top: 20px">
								<li><a href="#"><i class="fa fa-phone-square" aria-hidden="true"></i> 0384640190</a></li>
								<li><a href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i> dotrongnam2307200@gmail.com</a></li>
								<li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i>Thọ xuân, Thanh hóa</a></li>

								<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i> facebook.com/dotrongnam2307200</a></li>
							</ul>
						</div>
					</div>
					<div class="col-md-3">
						<div class="single-widget">
							<h2>DANH MỤC SẢN PHẨM</h2>
							<ul class="nav nav-pills nav-stacked">


								<?php while($row_category= mysqli_fetch_array($row)){ ?>

										
									<li ><a href="danh-muc/<?php echo $row_category['id_category'].'.html'; ?>"> <?php echo $row_category['category_name']; ?></a></li> 

									<?php } ?>
								

							</ul>
						</div>
					</div>
					<div class="col-md-3">
						<div class="single-widget">
							<h2>TIN TỨC VÀ HỖ TRỢ</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Chính sách giao hàng</a></li>
								<li><a href="#">Chính sách mua hàng</a></li>
								<li><a href="#">Chính sách đổi trả</a></li>
								<li><a href="#">Chính sách bảo hành</a></li>
								<li><a href="#">Chính sách bảo mật</a></li>
							</ul>
						</div>
					</div>
					
					<div class="col-md-3 ">
						<div class="single-widget">
							<h2>FANPAGE</h2>
							<iframe width="100%" height="200" style="border: none; overflow: hidden;" src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FThu%25E1%25BB%2591c-Giao-T%25E1%25BA%25ADn-Nh%25C3%25A0-1106186839483457%2F&amp;tabs=timeline&amp;width=340&amp;height=500&amp;small_header=false&amp;adapt_container_width=true&amp;hide_cover=false&amp;show_facepile=true&amp;appId=528747837290649" frameborder="0" scrolling="no"></iframe>
						</div>
					</div>
					
				</div>
			</div>
		</div>
		
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<p class="pull-left">.</p>
					<p class="pull-right">Designed by <span> Đỗ Trọng Nam</span></p>
				</div>
			</div>
		</div>
		
	</footer><!--/Footer-->
	