<?php 
	if(isset($_GET['p'])){
		$page = $_GET['p'];
	}else{
		$page =1;
	}
	if( $page ==1){
		$begin = 0;
	}else{
		$begin = ($page*6) - 6;
	}

	$id = $_GET['id'];
	$query = "SELECT * FROM product,category WHERE product.id_category = category.id_category AND product.id_category='".$id."' ORDER BY product_id DESC LIMIT $begin,6";
	$query1 = "SELECT * FROM category WHERE category.id_category='".$id."' ORDER BY id_category ";
	$row = mysqli_query($con, $query);
	$row1 = mysqli_query($con, $query1);

	
?>	
 

<div class="col-sm-9 padding-right">
	<div class="features_items">
		<!--features_items-->

		<?php while($row_cate_pro_name = mysqli_fetch_array($row1)){ ?>
		<h2 class="title text-center">CÁC SẢN PHẨM CỦA <?php echo $row_cate_pro_name['category_name']; ?> </h2>
	

		
		<?php while($row_category = mysqli_fetch_array($row)){ ?>
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

		
		
		<div class="col-sm-12">
		<?php 
			$id = $row_cate_pro_name['id_category']; 
			$query = "SELECT * FROM product,category WHERE product.id_category = category.id_category AND product.id_category='".$id."' ORDER BY product_id ";
			$row = mysqli_query($con, $query);
			$row_count = mysqli_num_rows($row);
			$trang = ceil($row_count/6);
		?>	

		<?php if($trang>1){ ?>
		<ul class="pagination">

			<?php 

			for($i = 1; $i<=$trang; $i++){

			 ?>


			 <li 
			 <?php if($page == $i){echo 'class="active"';} ?>>
			 <a  href="index.php?trang=danhmuc&id=<?php echo $row_cate_pro_name['id_category']; ?>&p=<?php echo $i; ?>"><?php echo $i; ?></a></li>
			<?php } ?>
		</ul>
		`<?php } ?>
	</div>

	<?php }?>
	</div><!--features_items-->
	
	
	
	
	
</div>