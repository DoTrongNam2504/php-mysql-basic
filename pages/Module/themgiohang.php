<?php 
	session_start();
	include('../../config/config.php');


	if(isset($_GET['request']) && $_GET['request']=='cong'){
		$id = $_GET['congid'];
		foreach ($_SESSION['cart'] as $cart_item) {
			if($cart_item['product_id'] != $id){

				$product[] = array(
							'product_name'=> $cart_item['product_name'],
							'product_id' => $cart_item['product_id'],
							'product_qty'=>$cart_item['product_qty'],
							'product_price'=>$cart_item['product_price'],
							'product_image' => $cart_item['product_image']
							);
							$_SESSION['cart'] = $product;

			}
			
			else{
				
				if($cart_item['product_qty'] <9){

					$tangsoluong = $cart_item['product_qty']+1;
					$product[] = array(
							'product_name'=> $cart_item['product_name'],
							'product_id' => $cart_item['product_id'],
							'product_qty'=>$tangsoluong,
							'product_price'=>$cart_item['product_price'],
							'product_image' => $cart_item['product_image']
							);

				}
				else{

					$product[] = array(
							'product_name'=> $cart_item['product_name'],
							'product_id' => $cart_item['product_id'],
							'product_qty'=>$cart_item['product_qty'],
							'product_price'=>$cart_item['product_price'],
							'product_image' => $cart_item['product_image']
							);


				}
				$_SESSION['cart'] = $product;

			}

		}

		header('Location:../../giohang.html');

	}


	if(isset($_GET['request']) && $_GET['request']=='tru'){
		$id = $_GET['truid'];
		foreach ($_SESSION['cart'] as $cart_item) {
			if($cart_item['product_id'] != $id){

				$product[] = array(
							'product_name'=> $cart_item['product_name'],
							'product_id' => $cart_item['product_id'],
							'product_qty'=>$cart_item['product_qty'],
							'product_price'=>$cart_item['product_price'],
							'product_image' => $cart_item['product_image']
							);
							$_SESSION['cart'] = $product;

			}
			
			else{
				
				if($cart_item['product_qty'] >1){

					$giamsoluong = $cart_item['product_qty']-1;
					$product[] = array(
							'product_name'=> $cart_item['product_name'],
							'product_id' => $cart_item['product_id'],
							'product_qty'=>$giamsoluong,
							'product_price'=>$cart_item['product_price'],
							'product_image' => $cart_item['product_image']
							);

				}
				else{

					$product[] = array(
							'product_name'=> $cart_item['product_name'],
							'product_id' => $cart_item['product_id'],
							'product_qty'=>$cart_item['product_qty'],
							'product_price'=>$cart_item['product_price'],
							'product_image' => $cart_item['product_image']
							);


				}
				$_SESSION['cart'] = $product;

			}

		}

		header('Location:../../giohang.html');

	}


	//session_destroy();

	if(isset($_GET['request']) && $_GET['request']=='deletall'){

		unset($_SESSION['cart']);
		header('Location:../../giohang.html');

	}

	if(isset($_SESSION['cart']) && $_GET['deleteid']){
		$id = $_GET['deleteid'];
		foreach ($_SESSION['cart'] as $cart_item) {
			if($cart_item['product_id'] != $id){

				$product[] = array(
							'product_name'=> $cart_item['product_name'],
							'product_id' => $cart_item['product_id'],
							'product_qty'=>$cart_item['product_qty'],
							'product_price'=>$cart_item['product_price'],
							'product_image' => $cart_item['product_image']
							);

			}
			$_SESSION['cart'] = $product;
			header('Location:../../giohang.html');
			
		}

	}
	// xóa một sản phẩm




	// them vao gio hang
	if(isset($_POST['add-to-cart']))
	{

		// lấy id của sản phẩm	
		$id = $_GET['id'];
		// khởi tạo số lượng thêm vào ban đầu là 1
		$soluong = 1;
		// Câu lệnh lấy ra sản phẩm có id trùng với id trên url từ Csdl
		$sql = "SELECT * FROM product WHERE product_id ='".$id."' ";

		// thực hiện kết nối câu lệnh lên database 
		$query = mysqli_query($con, $sql);

		//  mysqli_fetch_array() sẽ tìm và trả về một dòng kết quả của một truy vấn biến $query
		$row = mysqli_fetch_array($query);

		// kiếm tra xem có tồn tại kết quả của biến row không
		if($row){

			// Mặc định khởi tạo một 1 session giỏ hàng mới để lưu thông tin của phiên kích vào nút "Thêm vào giỏ hàng".
			$new_product = array(array(

				'product_name'=> $row['product_name'],

				'product_id' => $row['product_id'],

				'product_qty'=>$soluong,

				'product_price'=>$row['product_price'],

				'product_image' => $row['product_image']

			));

			// kiểm tra giỏ hàng đã tồn tại chưa . Nếu tồn tại rồi thì tiến hành kiểm tra xem sản phẩm được thêm đó đã tồn tại chưa 
			if(isset($_SESSION['cart'])){

				// khởi tạo biến kiểm tra ban đầu đang có trạng thái bằng sai 
				$found = false;

				// Lặp ra danh sách sản phẩm đã được thêm vào giỏ hàng khi đã kiểm tra điều kiện tồn tại của sản phẩm trong giỏ hàng 
				foreach ($_SESSION['cart'] as $cart_item) {

					// nếu sản phẩm chuẩn bị thêm có id trùng với id đã tồn tại trong giỏ hàng

					if( $cart_item['product_id']==$id ){

						//Khởi tạo biến giỏ hàng mới được update 
						$product[] = array(
							'product_name'=> $cart_item['product_name'],
							'product_id' => $cart_item['product_id'],
							'product_qty'=>$soluong+1,
							'product_price'=>$cart_item['product_price'],
							'product_image' => $cart_item['product_image'],
							);
						//biến trạng thái được chuyển thành đúng vì sản phẩm đã tồn tại
						$found = true;
						

					}
					else
					{	
						// nếu dữ liệu không trùng thì tiến hành khởi tạo một hàng mưới cho sản phẩm mưới được thêm 
						$product[] = array(


							'product_name'=> $cart_item['product_name'],
							'product_id' => $cart_item['product_id'],
							'product_qty'=>$cart_item['product_qty'],
							'product_price'=>$cart_item['product_price'],
							'product_image' => $cart_item['product_image'],
							);
					
					}
					
				}

				//Sau khi kiểm tra nếu như biến tìm kiếm vẫn là false thì tiến hành liên  kết dữ liệu của biến $new_product và biến $product
				if ($found == false) {

					// liên kết dữ liệu new_product và product bằng câu lệnh array_merge
					
					$_SESSION['cart'] = array_merge($product,$new_product);


				}
				// ngược lại nếu như biến founr chuyển thành true thì giỏ hàng sẽ  chỉ cập nhật lại sản phẩm đã tồn tại trong giỏ hàng
				else{


					$_SESSION['cart'] = $product;

				}


			}

			// Nếu chưa tồn tại sản phẩm nào thì sẽ tiến hành tạo mới một phiên lưu trữ sản phẩm đó bằng biến new_product đã khởi tạo ban đầu
			else{
				
				$_SESSION['cart'] = $new_product;
			}

		}
		// sau khi thao tác xog cho đường dẫn quay về trang giỏ hàng
		header('Location:../../?trang=giohang');

	}




 ?>