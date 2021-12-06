<style>
	.col-sm-3{
		display: none;

	}
	.login-form {
    padding: 50px;
    border: 2px solid #88888896;
    box-shadow: 1px -17px 8px #22222273;
}


.login-form h2 {
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
				<div class="col-sm-4 ">
					<div class="login-form"><!--login form-->
						<h2 style="text-align: center;">ĐĂNG NHẬP</h2>
						<form action="pages/Module/login.php" method="post" >
							<input type="email" placeholder="Email Address" name="email">
							
							<input type="password" name="password" placeholder="Password">
							
							<input type="submit" class="btn btn-default"  style="margin: 0 auto;margin-top: 30px" value="Đăng nhập" name ="login">
						</form>
						<p style="padding-top: 30px">Nếu bạn chưa có tài khoản<a href="?trang=dangki">  Đăng ký</a></p>
					</div><!--/login form-->
				</div>
				<div class="col-md-4"></div>
				
			</div>
		</div>
	</section>