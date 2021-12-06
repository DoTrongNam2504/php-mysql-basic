<?php if(isset($_GET['trang']))
{
	$url =$_GET['trang'];
		if($url=="danhmuc" || $url=="baiviet" || $url=="lienhe")
		{
			include("brecum_level1.php");
		}
		else
		{
				$url = '';
		}
}

else
		{
				include("slide.php");
		}

?>

	
<section>
	<div class="container">
		<div class="row">
			<?php include("Left.php");?>
			
			
			<?php if(isset($_GET['trang'])){
				$url =$_GET['trang'];
				
			}
			else{
				$url = '';
			}


		

			if($url=="danhmuc")
			{	
				include("Main/Danhmuc.php");

			}
			else if($url=="baiviet")
			{
				 include("Main/Tintuc.php");

			}
			else if($url=="lienhe")
			{
				 include("Main/Lienhe.php");

			}
			else if($url=="chitiet")
			{	
				include("Detail/index.php");

			}
			else if($url=="chitietbv")
			{	
				include("Baiviet/index.php");

			}
			else if($url=="giohang")
			{	
				include("Cart/index.php");

			}

			else if($url=="dangnhap")
			{	
				include("Login/login.php");

			}

			else if($url=="dangki")
			{	
				include("Login/register.php");

			}
			else if($url=="dangxuat")
			{	
				include("Login/login.php");

			}
			else if($url=="doimatkhau")
			{	
				include("Login/doimatkhau.php");

			}
			else if($url=="thuonghieu")
			{	
				include("Main/Thuonghieu.php");

			}

			else if($url=="doithongtintk")
			{	
				include("Login/doithongtintk.php");

			}
			else if($url=="thanhtoan")
			{	
				include("Cart/payment.php");

			}
			else if(isset($_GET['keyword']))
			{	
				include ("search/index.php");

			}
			else if(isset($_GET['p']) && $url=="danhmuc"){
				include("Main/Danhmuc.php");
			}

			else if(isset($_GET['p']) && $url=="thuonghieu"){
				include("Main/Thuonghieu.php");
			}

			else
			{
				 include("Main/index.php");
			}

			 ?>
			
		</div>
	</div>
</section>