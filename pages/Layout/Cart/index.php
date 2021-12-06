<style>
	.col-sm-3{
		display: none;
	}
</style>
  <section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="#">Trang chủ</a></li>
				  <li class="active">Giỏ hàng </li>
				</ol>
			</div>
			<div class="table-responsive cart_info">
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="image">Sản phẩm</td>
							<td class="description">Nội dung</td>
							<td class="price">Giá </td>
							<td class="quantity">Số lượng</td>
							<td class="total">Tạm tính</td>
							<td></td>
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
									<td class="cart_price">
										<p><?php echo number_format( $cart_item['product_price'], 0, ',','.').'đ'; ?></p>
									</td>
									<td class="cart_quantity">
										<div class="cart_quantity_button">

											<a class="cart_quantity_up" href="pages/Module/themgiohang.php?request=cong&congid=<?php echo $cart_item['product_id']; ?>"> + </a>

											<input class="cart_quantity_input" type="text" name="quantity" value="<?php echo $cart_item['product_qty']; ?>" autocomplete="off" size="2">

											<a class="cart_quantity_down" href="pages/Module/themgiohang.php?request=tru&truid=<?php echo $cart_item['product_id']; ?>"> - </a>
										</div>
									</td>
									<td class="cart_total">
										<p class="cart_total_price"><?php echo number_format( $thanhtien,0,',','.').'đ'; ?></p>
									</td>
									<td class="cart_delete">
										<a class="cart_quantity_delete" href="pages/Module/themgiohang.php?request=delete&deleteid=<?php echo $cart_item['product_id']; ?>"><i class="fa fa-times"></i></a>
									</td>
								</tr>

						<?php } ?>

						<?php }else{ ?>
							<td colspan="6" style="padding: 20px;font-size: 19px;"> Chưa có sản phẩm nào trong giỏ hàng</td>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</section>
	<section id="do_action">
		<div class="container">
			<div class="heading">
				<h3>Vui lòng cập nhật kĩ số lượng của bạn trước khi thanh toán!</h3>
			</div>
			<div class="row">
				
				<div class="col-sm-12">
					<div class="total_area">
						<ul>
							
							<li>Tổng tiền 

								<span>
									<?php if(isset($tongtien)){ ?>
								<?php echo number_format( $tongtien,0,',','.').'đ'; ?>
									<?php } ?>
								</span>
							</li>

						</ul>
							<a class="btn btn-default update" href="pages/Module/themgiohang.php?request=deletall">Xóa tất cả sản phẩm </a>

							
							<?php if(isset($_SESSION['dangky']) || isset($_SESSION['dangnhap'])){ ?>
								<a class="btn btn-default check_out" href="?trang=thanhtoan">Thanh toán</a>
							<?php }else{ ?>
								<a class="btn btn-default check_out" href="?trang=dangnhap">Thanh toán</a>
							<?php } ?>
					</div>
				</div>
			</div>
		</div>
	</section>