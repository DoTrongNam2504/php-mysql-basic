<?php 

$query = "SELECT * FROM artices_item  ORDER BY baiviet_id ";
	$row = mysqli_query($con, $query);

 ?>
<div class="col-sm-9 padding-right">
	<div class="features_items"><!--features_items-->
		<h2 class="title text-center">Tin Tức</h2>

		<?php while($row_cate_pro = mysqli_fetch_array($row)){ ?>
		<div class="col-sm-4">
			<div class="product-image-wrapper">
				<div class="single-products">
						<div class="productinfo text-center">
							<img src="upload/article/<?php echo $row_cate_pro['baiviet_image']; ?>" alt="" />
							<h3><?php echo $row_cate_pro['baiviet_name']; ?></h3>
							<p>Mô tả ngắn:<?php echo $row_cate_pro['baiviet_desc']; ?></p>
							<a href="?trang=chitietbv&id=<?php echo $row_cate_pro['baiviet_id']; ?>" class="btn btn-default add-to-cart">Xem thêm</a>
						</div>
						
				</div>
				
			</div>
		</div>
		<?php } ?>
		
	</div><!--features_items-->
	
	
	
	
	
</div>