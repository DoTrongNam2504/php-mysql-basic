
<?php 


include ('../../../config/config.php');


if(isset($_POST['add-brand'])){
	$brand_name = $_POST['brand_name'];
	$brand_order = $_POST['brand_order'];
	$brand_status = $_POST['brand_status'];
	$query = "INSERT INTO brand(brand_name, brand_order, brand_status) values('".$brand_name."','".$brand_order."','".$brand_status."')";
	mysqli_query($con, $query); 
	Header('Location:../../?admin_control=quanlithuonghieu');
}
else if(isset($_POST['edit-brand'])){
	$id = $_GET['id'];
	$brand_name = $_POST['brand_name'];
	$brand_order = $_POST['brand_order'];
	$brand_status = $_POST['brand_status'];
	$query = "UPDATE brand SET brand_name = '".$brand_name."',brand_order = '".$brand_order."',brand_status = '".$brand_status."'
	WHERE brand_id='".$id."' " ;
	mysqli_query($con, $query); 
	Header('Location:../../?admin_control=quanlithuonghieu');
}
else{
	$id = $_GET['id'];
	$query1 = "DELETE FROM brand WHERE brand_id='".$id."'";
	mysqli_query($con, $query1); 
	Header('Location:../../?admin_control=quanlithuonghieu');
}

 ?>