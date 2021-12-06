<style>
	.col-sm-3{
		display: none;
	}
</style>
<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="index.php">Home</a></li>
				  <li class="active">Thanh toán</li>
				</ol>
			</div><!--/breadcrums-->

			
			
			<div class="register-req">
				<p>Khách hàng vui lòng điền đầy đủ thông tin của mình để được nhận hàng sớm nhất </p>
			</div><!--/register-req-->

			<div class="shopper-informations">
				<div class="row">
					
					<div class="col-md-6 clearfix">
						<div class="bill-to">
							<p class="text-center">Thông tin khách hàng</p>
							<div class="position-center">
								<form action="pages/Module/payment.php" method="POST">

									<div class="form-group">
                                        <label for="brand_name">Họ tên khách hàng: </label>
                                        <input type="text" class="form-control" id="brand_name" name="brand_name" placeholder="Họ và tên...">
                                    </div>
                                    <div class="form-group">
                                        <label for="brand_name">Số điện thoại </label>
                                        <input type="text" class="form-control" id="brand_name" name="brand_name" placeholder="Password">
                                    </div>
                                    <div class="form-group">
                                        <label for="brand_name">Địa chỉ nhận hàng </label>
                                        <input type="text" class="form-control" id="brand_name" name="brand_name" placeholder="Password">
                                    </div>
                                    <div class="form-group">
                                        <label for="brand_name">Email khách hàng </label>
                                        <input type="text" class="form-control" id="brand_name" name="brand_name" placeholder="Password">
                                    </div>
                                   
                                    <div class="form-group">
                                        <label for="brand_name">Ghi chú: </label>
                                        <textarea class="form-control"></textarea>   
                                    </div>
                                    <input type="submit" class="btn btn-info" name="payment_end" value="Tiến hành thanh toán">
								</form>
							</div>
							
						</div>
					</div>
					<div class="col-md-6">
							<div class="review-payment">
				<h2>Đơn hàng của bạn</h2>
			</div>

			<div class="table-responsive cart_info">
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="image">Hình ảnh</td>
							<td class="image">Sản phẩm</td>
							
							<td class="quantity">Thành tiền</td>
						</tr>
					</thead>
					<tbody>
						<?php if(isset($_SESSION['cart'])){ ?>

							<?php 
								$i=0 ; $tongtien = 0; 
								foreach ($_SESSION['cart'] as $cart_item){ 
								$thanhtien = $cart_item['product_qty']* $cart_item['product_price'];
								$tongtien +=$thanhtien;
								$i++; ?>
						<tr>
							<td class="cart_product">
								<a href=""><img src="upload/<?php echo $cart_item['product_image']; ?>" alt="" height="60px"></a>
							</td>
							<td class="cart_description">
								<h4><a href=""><?php echo $cart_item['product_name']; ?></a></h4>
								<p>Mã sản phẩm: SP<?php echo $cart_item['product_id']; ?></p>
							</td>
							<td class="cart_total">
								<p class="cart_total_price"><?php echo number_format( $thanhtien,0,',','.').'đ'; ?></p>
							</td>
					
							
						</tr>
					<?php }} ?>
						
					</tbody>
				</table>
			</div>
			
					</div>					
				</div>
			</div>
			
		</div>
	</section>