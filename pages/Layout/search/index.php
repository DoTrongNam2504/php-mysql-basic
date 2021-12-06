<?php 
	$keyword = $_GET['keyword'];
	$query1 = "SELECT * FROM product WHERE product.product_name like '%".$keyword."%'";
	$row11 = mysqli_query($con, $query1);
?>	
 

<div class="col-sm-9 padding-right">
	<div class="features_items ">
		<!--features_items-->

		<h2 class="title text-center"> KẾT QUẢ TÌM KIẾM: <?php echo $_GET['keyword']; ?> </h2>
	<div class="row">
		<?php while($new = mysqli_fetch_array($row11)){ ?>
		<div class="col-sm-4">
			<div class="product-image-wrapper">
				<div class="single-products">
						<div class="productinfo text-center">
							<img src="upload/<?php echo $new['product_image']; ?>" alt="" style="height: 230px; width: 250px" />
							<h2><?php echo number_format( $new['product_price'],0,',','.').'đ'; ?></h2>
							<a href="?trang=chitiet&id=<?php echo $new['product_id']; ?>"><p><?php echo $new['product_name']; ?></p></a>
							<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</a>
						</div>
						<div class="product-overlay">
							<div class="overlay-content">
								<h2><?php echo number_format( $new['product_price'],0,',','.').'đ'; ?></h2>
								<a href="?trang=chitiet&id=<?php echo $new['product_id']; ?>"><p><?php echo $new['product_name']; ?></p></a>
								<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</a>
							</div>
						</div>
				</div>
				<div class="choose">
					<ul class="nav nav-pills nav-justified">
						<li><a href="#"><i class="fa fa-plus-square"></i>Thêm vào yêu thích</a></li>
					</ul>
				</div>
			</div>
		</div>	
		
		<?php } ?>
	</div>
			
	</div><!--features_items-->
	
	
	
	
	
</div>