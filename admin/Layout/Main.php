<?php 


        $query = "SELECT * from  user  ";
        $query1 = "SELECT * from  cart ";
      
        $query22 = "SELECT * from  cart_detail, product WHERE cart_detail.product_id= product.product_id  ";
        $list22=mysqli_query($con, $query22); 


        $query3 = "SELECT * from  admin ";
        $list=mysqli_query($con, $query); 
        $list1=mysqli_query($con, $query1); 
        $list3=mysqli_query($con, $query3); 

 ?>
<section class="wrapper">
<!-- //market-->
	<div class="market-updates">
		
		<div class="col-md-3 market-update-gd">
			<div class="market-update-block clr-block-2">
				<div class="col-md-4 market-update-right">
					<i class="fa fa-eye"> </i>
				</div>
				 <div class="col-md-8 market-update-left">
				 <h4>Khách hàng</h4>
				 <?php
				 $i=0; while ($row= mysqli_fetch_array($list)) $i++;?>
				<h3><?php echo $i; ?></h3>
			
			  </div>
			  <div class="clearfix"> </div>
			</div>
		</div>
	
		<div class="col-md-3 market-update-gd">
			<div class="market-update-block clr-block-1">
				<div class="col-md-4 market-update-right">
					<i class="fa fa-users" ></i>
				</div>
				<div class="col-md-8 market-update-left">
					 <?php
				 $j=0; while ($row= mysqli_fetch_array($list3)) $j++;?>
				<h4>Người dùng</h4>
					<h3><?php echo $j; ?></h3>
				</div>
			  <div class="clearfix"> </div>
			</div>
		</div>
		<div class="col-md-3 market-update-gd">
			<div class="market-update-block clr-block-3">
				<div class="col-md-4 market-update-right">
					<i class="fa fa-usd"></i>
				</div>
				<div class="col-md-8 market-update-left">
					<h4>Tổng thu</h4>

					<?php $i=0;$tongdon=0;
	                   while ($row= mysqli_fetch_array($list22)) {
							 $i++; $tongtien = $row['product_price']*$row['qty_buy'];$tongdon += $tongtien;
	                    ?>

	                   

	                <?php } ?>
	                <h3>
						 <?php echo number_format($tongdon,0,',','.').'đ'; ?>

					</h3>
	                   
					
				</div>
			  <div class="clearfix"> </div>
			</div>
		</div>
		<div class="col-md-3 market-update-gd">
			<div class="market-update-block clr-block-4">
				<div class="col-md-4 market-update-right">
					<i class="fa fa-shopping-cart" aria-hidden="true"></i>
				</div>
				<div class="col-md-8 market-update-left">
					<h4>Đơn hàng</h4>
					<?php
				 	$j=0; while ($row= mysqli_fetch_array($list1)) $j++;?>
					<h3><?php echo $j; ?></h3>
				</div>
			  <div class="clearfix"> </div>
			</div>
		</div>
	   <div class="clearfix"> </div>
	</div>	
	<!-- //market-->
	<div class="main">
		<p style="height: 270px"></p>
	</div>
			
</section>