<?php 
	if (isset($_GET['id'])) {

		$id = $_GET['id'];
		$query1 = "SELECT * FROM category WHERE category.id_category='".$id."' ORDER BY id_category ";
		$row1 = mysqli_query($con, $query1);
	}
	
	
	 ?>
<section id="slider"><!--slider-->
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div id="slider-carousel" class="carousel slide" data-ride="carousel">
					
					<div class="carousel-inner">
						
						<div class=" active" style="background: #e1d6d657;height: 200px">
							<?php if(isset($_GET['id'])){?>
								<?php while($row_cate_pro_name = mysqli_fetch_array($row1)){ ?>
									<div class="col-sm-12 main-brecum">
										<h2 class="text-center"><?php echo $row_cate_pro_name['category_name']; ?></h2>
										<ul>
											<li>
												<a href="\"> TRANG CHỦ  </a>
											</li>
											<li>>></li>
											<li>
												<?php echo $row_cate_pro_name['category_name']; ?>
											</li>
										</ul>
									
									</div>
								<?php } ?>
							<?php }else if($_GET['trang']=='baiviet'){?>
								<div class="col-sm-12 main-brecum">
										<h2 class="text-center">Bài viết</h2>
										<ul>
											<li>
												<a href="\"> TRANG CHỦ  </a>
											</li>
											<li>>></li>
											<li>
												Bài viết
											</li>
										</ul>
									
									</div>

							<?php }else if($_GET['trang']=='lienhe'){ ?>

								<div class="col-sm-12 main-brecum">
									<h2 class="text-center">Liên hệ</h2>
									<ul>
										<li>
											<a href="\"> TRANG CHỦ  </a>
										</li>
										<li>>></li>
										<li>
											Liên hệ
										</li>
									</ul>
								
								</div>
							<?php } ?>
						</div>
						
						
						
					</div>
					
					
				</div>
				
			</div>
		</div>
	</div>
</section>