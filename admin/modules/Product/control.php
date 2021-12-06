<?php 


include ('../../../config/config.php');

	
if(isset($_POST['add-product'])){

	$name = $_POST['name'];
	$image = $_FILES['image']['name'];
	$image_tmp = $_FILES['image']['tmp_name'];
	$image = time().'_'.$image;
	$price = $_POST['price'];
	$quantity = $_POST['quantity'];
	$status = $_POST['status'];
	$category = $_POST['category_id'];
	$brand = $_POST['brand_id'];
	$description = $_POST['description'];
	$content = $_POST['content'];

	$query = "INSERT INTO product(product_name,product_image,product_price,product_qty, product_status, product_des,id_category,brand_id, product_content) 
	values('".$name."','".$image."','".$price."','".$quantity."','".$status."','".$description."','".$category."','".$brand."','".$content."')";

	mysqli_query($con, $query); 
	move_uploaded_file($image_tmp,'../../../upload/'.$image);
	Header('Location:../../?admin_control=quanlisanpham');
}
else if(isset($_POST['edit-product'])){

	$name = $_POST['name'];
	$image = $_FILES['image']['name'];
	$image_update = $_FILES['image']['name'];
	$image_tmp = $_FILES['image']['tmp_name'];
	$image = time().'_'.$image;
	$price = $_POST['price'];
	$quantity = $_POST['quantity'];
	$status = $_POST['status'];
	$category = $_POST['category_id'];
	$brand = $_POST['brand_id'];
	$description = $_POST['description'];
	$content = $_POST['content'];

	if ($image_update !='') 
	{
		$id = $_GET['id'];
		move_uploaded_file($image_tmp, '../../../upload/'.$image);
		$update = "UPDATE product SET product_name = '".$name."',product_image = '".$image."',product_price = '".$price."',product_qty = '".$quantity."',product_status = '".$status."',product_des = '".$description."',id_category = '".$category."',brand_id = '".$brand."',product_content = '".$content."' WHERE product_id ='".$_GET['id']."' " ;

		$sql = "SELECT * FROM product WHERE product_id ='".$id."'";
		$query = mysqli_query($con, $sql);
		while ($row = mysqli_fetch_array($query)) {
		    unlink('../../../upload/'.$row["product_image"]);
		}
	}
	else if($image_update =='') {

	$update = "UPDATE product SET 
		product_name = '".$name."', 
		product_price = '".$price."', 
		product_qty = '".$quantity."', 
		product_status = '".$status."',
		product_des = '".$description."',
		id_category = '".$category."',
		brand_id = '".$brand."',
		product_content = '".$content."'
			WHERE product_id='".$_GET['id']."' 
		" ;
	}
	mysqli_query($con, $update); 
	Header('Location:../../?admin_control=quanlisanpham');

}
else{
	$id = $_GET['id'];
	$query1 = "DELETE FROM product WHERE product_id ='".$id."'";
	mysqli_query($con, $query1); 
	Header('Location:../../?admin_control=quanlisanpham');
}

?>
