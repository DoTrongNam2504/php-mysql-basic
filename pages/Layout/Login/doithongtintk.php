<style>
	.col-sm-3{
		display: none;

	}
	.signup-form {
    padding: 50px;
    border: 2px solid #88888896;
    box-shadow: 1px -17px 8px #22222273;
}


.signup-form h2 {
    color: #000;
    font-size: 29px;
    font-weight: 400;
}

input.btn.btn-default {
    background: #fe980fcf;
    color: #fff;
    font-size: 17px;
    font-weight: 600;
    text-transform: uppercase;
}

section#form {margin-top: 80px;}
</style>

<?php 
	$id = $_SESSION['id_user'];
	$sql="SELECT * FROM user WHERE user_id='".$id."'";
	$row = mysqli_query($con,$sql);

	
 ?>
<section id="form"><!--form-->
		<div class="container">
			<div class="row">
			
				<div class="col-md-3"></div>
				<div class="col-sm-6">
					<?php while($row_user= mysqli_fetch_array($row)){ ?>
					<div class="signup-form"><!--sign up form-->
						<h2 style="text-align: center;">THAY ĐỔI THÔNG TIN TÀI KHOẢN!</h2>
						<form action="pages/Module/login.php" method="post">
							<input type="text" placeholder="Họ và tên"  name="user_name" value="<?php echo $row_user['user_name']; ?>">
							<input type="email"  name="email" placeholder="Nhập email của bạn.." value="<?php echo $row_user['email']; ?>">
							<input type="text"  name="phone" placeholder="Nhập số điện thoại.." value="<?php echo $row_user['phone']; ?>">
							<input type="text"  name="address" placeholder="Nhập địa chỉ.." value="<?php echo $row_user['address']; ?>">
							<button type="submit" class="btn btn-default" name="update-tt" style="margin: 0 auto;margin-top: 30px">CẬP NHẬT</button>
						</form>
					</div><!--/sign up form-->
					<?php } ?>
				</div>
				<div class="col-md-3"></div>
			</div>
		</div>
	</section>