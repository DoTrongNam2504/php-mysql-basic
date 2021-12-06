<?php 
	
	$query = "SELECT * FROM product,category WHERE product.id_category = category.id_category ORDER BY product_id LIMIT 6 ";
	$row = mysqli_query($con, $query);
?>	
 
<div class="col-sm-9 padding-right">
	<div class="features_items"><!--features_items-->
		<h2 class="title text-center">Sản Phẩm Nổi Bật</h2>

		<?php while($row_category= mysqli_fetch_array($row)){ ?>
		<div class="col-sm-4">
			<div class="product-image-wrapper">
				<div class="single-products">
						<div class="productinfo text-center">
							<a href="?trang=chitiet&id=<?php echo $row_category['product_id']; ?>"><img src="upload/<?php echo $row_category['product_image']; ?>" style="height: 230px; width: 250px" alt="" /></a>
							<h2><?php echo number_format($row_category['product_price'],0,',','.').'đ'; ?></h2>
								<a href="?trang=chitiet&id=<?php echo $row_category['product_id']; ?>"><p><?php echo $row_category['product_name']; ?></p></a>
							<form action="pages/Module/themgiohang.php?id=<?php echo $row_category['product_id']; ?>" method="POST">
								<input type="submit" name="add-to-cart" class="btn btn-default add-to-cart" value="Thêm vào giỏ hàng">
							</form>
						</div>
						
				</div>
				
			</div>
		</div>	
		<?php } ?>
		
	</div><!--features_items-->
	
	
	
	
	
</div>