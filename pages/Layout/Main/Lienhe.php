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
</style>

<?php 
	if(isset($_SESSION['dangnhap'])|| isset($_SESSION['dangky']))
{	$query = "SELECT * FROM user WHERE user_id='".$_SESSION['user_id']."' ORDER BY user_id ";
	$row = mysqli_query($con, $query);}

 ?>


<div id="contact-page" class="container">
    	<div class="bg">
	    	<div class="row">    		
	    		<div class="col-sm-12">    			   			
					<h2 class="title text-center " style="margin-bottom: 60px">LIÊN HỆ VỚI CHÚNG TÔI</h2>    			    				    				
				</div>			 		
			</div>
			<?php if(isset($_SESSION['dangnhap'])|| isset($_SESSION['dangky'])){ ?> 
			<?php while($row_user = mysqli_fetch_array($row)){ ?>   	
    		<div class="row">  	
	    		<div class="col-sm-8">
	    			<div class="contact-form">
	    				<h2 class="title text-center">FORM GỬI THÔNG TIN</h2>
	    				<div class="status alert alert-success" style="display: none"></div>
				    	<form  name="contact-form" action="pages/Module/contact.php" method="post">
				            <div class="form-group col-md-6">
				                <input type="text" name="name" class="form-control" required="required" placeholder="Name" value="<?php echo $row_user['user_name']; ?>">
				            </div>
				            <div class="form-group col-md-6">
				                <input type="email" name="email" class="form-control" required="required" placeholder="Email" value="<?php echo $row_user['email']; ?>">
				            </div>
				            <div class="form-group col-md-6">
				                <input type="text" name="phone" class="form-control" required="required" placeholder="Phone" value="<?php echo $row_user['phone']; ?>">
				            </div>
				            <div class="form-group col-md-6">
				                <input type="text" name="address" class="form-control" required="required" placeholder="Address" value="<?php echo $row_user['address']; ?>">
				            </div>
				            <div class="form-group col-md-12">
				                <textarea name="message" id="message" required="required" class="form-control" rows="8" placeholder="Nội dung ghi chú"></textarea>
				            </div>                        
				            <div class="form-group col-md-12">
				                <input type="submit" name="submit_contact" class="btn btn-primary pull-right" value="Submit">
				            </div>
				        </form>
	    			</div>
	    		</div>
	    		<div class="col-sm-4">
	    			<div class="contact-info">
	    				<h2 class="title text-center">Thông tin liên hệ</h2>
	    				<ul class="contact_list" style="margin-top: 20px">
							<li><a href="#"><i class="fa fa-phone-square" aria-hidden="true"></i> 0384640190</a></li>
							<li><a href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i> dotrongnam2307200@gmail.com</a></li>
							<li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i>Thọ xuân, Thanh hóa</a></li>

							<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i> facebook.com/dotrongnam2307200</a></li>
						</ul>
	    			</div>
    			</div>    			
	    	</div> 
			<?php }}else{ ?> 
				<div class="row">  	
	    		<div class="col-sm-8">
	    			<div class="contact-form">
	    				<h2 class="title text-center">FORM GỬI THÔNG TIN</h2>
	    				<div class="status alert alert-success" style="display: none"></div>
				    	<form  name="contact-form" action="pages/Module/contact.php" method="post">
				            <div class="form-group col-md-6">
				                <input type="text" name="name" class="form-control" required="required" placeholder="Name">
				            </div>
				            <div class="form-group col-md-6">
				                <input type="email" name="email" class="form-control" required="required" placeholder="Email">
				            </div>
				            <div class="form-group col-md-6">
				                <input type="text" name="phone" class="form-control" required="required" placeholder="Phone">
				            </div>
				            <div class="form-group col-md-6">
				                <input type="text" name="address" class="form-control" required="required" placeholder="Address">
				            </div>
				            <div class="form-group col-md-12">
				                <textarea name="message" id="message" required="required" class="form-control" rows="8" placeholder="Your Message Here"></textarea>
				            </div>                        
				            <div class="form-group col-md-12">
				                <input type="submit" name="submit_contact" class="btn btn-primary pull-right" value="Submit">
				            </div>
				        </form>
	    			</div>
	    		</div>
	    		<div class="col-sm-4">
	    			<div class="contact-info">
	    				<h2 class="title text-center">Thông tin liên hệ</h2>
	    				<ul class="contact_list" style="margin-top: 20px">
							<li><a href="#"><i class="fa fa-phone-square" aria-hidden="true"></i> 0384640190</a></li>
							<li><a href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i> dotrongnam2307200@gmail.com</a></li>
							<li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i>Thọ xuân, Thanh hóa</a></li>

							<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i> facebook.com/dotrongnam2307200</a></li>
						</ul>
	    			</div>
    			</div>    			
	    	</div> 
			<?php } ?>
    	</div>	
    </div>