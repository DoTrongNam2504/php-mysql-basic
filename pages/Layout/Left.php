<?php 

	$sql = "  SELECT * FROM brand ORDER BY brand_id desc";
	$row = mysqli_query($con,$sql);

 ?>
<div class="col-sm-3">
	<div class="left-sidebar">
		<h2>THƯƠNG HIỆU NỔI BẬT</h2>
		<div class="panel-group category-products" id="accordian"><!--category-productsr-->

			<?php while($row_brand = mysqli_fetch_array($row)){ ?>
			<div class="panel panel-default">
				<div class="panel-heading">
					<h4 class="panel-title"><a href="thuong-hieu/<?php echo $row_brand['brand_id'].'.html'; ?>"><?php echo $row_brand['brand_name']; ?></a></h4>
				</div>
			</div>
			<?php } ?>
			
		</div><!--/category-products-->
	
		
		
		<div class="shipping text-center"><!--shipping-->
			<img src="template/images/home/shipping.jpg" alt="" />
		</div><!--/shipping-->
	
	</div>
</div>