<?php 
$id = $_GET['id'];

$query = "SELECT * FROM artices_item where baiviet_id = '".$id."' ORDER BY baiviet_id ";
	$row = mysqli_query($con, $query);

 ?>
 
<div class="col-sm-9">
	<?php while($row_cate_pro = mysqli_fetch_array($row)){ ?>
	<div class="blog-post-area">
		<h2 class="title text-center">Chi tiết bài viết</h2>
		<div class="single-blog-post">
			<h3><?php echo $row_cate_pro['baiviet_name']; ?></h3>
			
			<a href="">
				<img src="upload/article/<?php echo $row_cate_pro['baiviet_image']; ?>" alt="" style="width: 400px; height: 400px; display: block;margin:0 auto">
			</a>
			
			
		</div>
	</div><!--/blog-post-area-->
	
	<p style="padding-top:40px">
	<div class="category-tab shop-details-tab"><!--category-tab-->
		<div class="col-sm-12">
			<ul class="nav nav-tabs">
				<li class="active"><a href="#details" data-toggle="tab">Mô tả ngắn</a></li>
				<li><a href="#companyprofile" data-toggle="tab">Nội dung chi tiết</a></li>
				
			</ul>
		</div>
		<div class="tab-content">
			<div class="tab-pane fade active in" id="details">
				
				<div class="col-sm-12">				
					<p> <?php echo $row_cate_pro['baiviet_desc']; ?></p>	
				</div>
				
			</div>
			
			<div class="tab-pane fade" id="companyprofile">
				<div class="col-sm-12">				
					<p> <?php echo $row_cate_pro['baiviet_content']; ?></p>	
				</div>
				
			</div>
			
		</div>
	</div>
<?php } ?>
</div>