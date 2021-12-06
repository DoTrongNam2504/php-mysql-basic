<?php 

	if(isset($_GET['id']))
		{
			$id = $_GET['id'];
		}

	$query = "SELECT * FROM product, category WHERE product.id_category= category.id_category AND product_id='".$id."' ";
	$row = mysqli_query($con, $query);

?>	
 	

<div class="col-sm-9 padding-right">
	<?php while($value= mysqli_fetch_array($row)){ ?>
	<div class="product-details"><!--product-details-->
		<div class="col-sm-5">
			<div class="view-product">
				<img src="upload/<?php echo $value['product_image']; ?>" alt="">
				<h3>ZOOM</h3>
			</div>
		</div>
		<div class="col-sm-7">
			<form action="pages/Module/themgiohang.php?id=<?php echo $value['product_id']; ?>" method="POST">
			<div class="product-information"><!--/product-information-->
				<img src="template/images/product-details/new.jpg" class="newarrival" alt="">

				<h2><?php echo $value['product_name']; ?></h2>

				<p>Mã sản phẩm : SP<?php echo $value['product_id']; ?></p>

				<img src="template/images/product-details/rating.png" alt="" class="rateting-product">
				<span>

					<span><?php echo number_format($value['product_price'],0,',','.').'đ'; ?></span>

					<label>Số lượng:</label>
					<input type="text" value="1" name="product_buy_qty">
					<input type="submit" name="add-to-cart" class="btn btn-fefault cart btn-style-pro" value="Thêm vào giỏ hàng">
					
				</span>
				<p><b>Tình trạng:</b> 
					<?php if($value['product_qty']>0 ){ ?>
						Còn hàng
					<?php } else{ ?>
						Hết hàng
					<?php } ?>
				</p>
				<p><b>Kiểu hàng:</b> Mới</p>
				<p><b>Danh mục:</b> <?php echo $value['category_name']; ?></p>
				<a href=""><img src="template/images/product-details/share.png" class="share img-responsive" alt=""></a>
			</div><!--/product-information-->
			</form>

		</div>
	</div><!--/product-details-->
	
	<div class="category-tab shop-details-tab"><!--category-tab-->
		<div class="col-sm-12">
			<ul class="nav nav-tabs">
				<li class="active"><a href="#description" data-toggle="tab">Mô tả ngắn</a></li>
				<li ><a href="#content" data-toggle="tab">Nội dung chi tiết</a></li>
				
			</ul>
		</div>
		<div class="tab-content">

			<div class="tab-pane fade active in" id="description">
				<div class="col-sm-12">
					
					<p><?php echo $value['product_des']; ?></p>
				</div>
			</div>

			<div class="tab-pane fade" id="content">
				<div class="col-sm-12">
					
					<p><?php echo $value['product_content']; ?></p>
				</div>
			</div>
			
			
		</div>
	</div><!--/category-tab-->
	
	<div class="recommended_items"><!--recommended_items-->
		<h2 class="title text-center">SẢN PHẨM CÙNG DANH MỤC</h2>
		
		<div id="recommended-item-carousel container" >
		<div class=" row">	
			
			<?php 
			$id_category =$value['id_category'];
				$query12 = "SELECT * FROM product,category WHERE product.id_category= category.id_category AND product_id != '".$id."'
				 AND product.id_category = '".$id_category."' LIMIT 4";
				$row12 = mysqli_query($con, $query12);

			 ?> 

			 <?php while($value12= mysqli_fetch_array($row12)) { ?>
			<div class="col-sm-3">
				<div class="product-image-wrapper">
					<div class="single-products">
						<div class="productinfo text-center">
							<img src="upload/<?php echo $value12['product_image']; ?>" alt="">
							<h2><?php number_format( $value12['product_price'] ); ?></h2>
							<p><?php echo $value12['product_name']; ?></p>
							<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</button>
						</div>
					</div>
				</div>
			</div>
		<?php } ?>
		</div>
					
		</div>
	</div><!--/recommended_items-->	
	<?php } ?>
</div> 
