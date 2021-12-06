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
<section id="form"><!--form-->
		<div class="container">
			<div class="row">
			
				<div class="col-md-4"></div>
				<div class="col-sm-4">
					<div class="signup-form"><!--sign up form-->
						<h2 style="text-align: center;">TẠO TÀI KHOẢN!</h2>
						<form action="pages/Module/login.php" method="post">
							<input type="text" placeholder="Họ và tên"  name="user_name">
							<input type="password" placeholder="Mật khẩu"  name="password">
							<input type="email"  name="email" placeholder="Nhập email của bạn..">
							<input type="text"  name="phone" placeholder="Nhập số điện thoại..">
							<input type="text"  name="address" placeholder="Nhập địa chỉ..">
							<button type="submit" class="btn btn-default" name="register" style="margin: 0 auto;margin-top: 30px">ĐĂNG KÍ</button>
						</form>
						<p style="padding-top: 30px">Bạn đã có tài khoản! Vui lòng <a href="?trang=dangnhap">Đăng nhập</a></p>
					</div><!--/sign up form-->
				</div>
				<div class="col-md-4"></div>
			</div>
		</div>
	</section>