
<?php 


include ('../../../config/config.php');


if(isset($_POST['add-category'])){
	$category_name = $_POST['category_name'];
	$orderby = $_POST['orderby'];
	$category_status = $_POST['category_status'];
	$query = "INSERT INTO category(category_name, orderby, category_status) values('".$category_name."','".$orderby."','".$category_status."')";
	mysqli_query($con, $query); 
	Header('Location:../../?admin_control=quanlidanhmuc');
}
else if(isset($_POST['edit-category'])){
	$id = $_GET['id'];
	$category_name = $_POST['category_name'];
	$orderby = $_POST['orderby'];
	$category_status = $_POST['category_status'];
	$query = "UPDATE category SET category_name = '".$category_name."',orderby = '".$orderby."',category_status = '".$category_status."' WHERE id_category='".$id."' " ;
	mysqli_query($con, $query); 
	Header('Location:../../?admin_control=quanlidanhmuc');
}
else{
	$id = $_GET['id'];
	$query1 = "DELETE FROM category WHERE id_category='".$id."'";
	mysqli_query($con, $query1); 
	Header('Location:../../?admin_control=quanlidanhmuc');
}

 ?>
