<?php 


include ('../../../config/config.php');

	
if(isset($_POST['add-baiviet'])){

	$baiviet_name = $_POST['baiviet_name'];

	$image = $_FILES['image']['name'];
	$image_tmp = $_FILES['image']['tmp_name'];
	$image = time().'_'.$image;

	$baiviet_desc = $_POST['baiviet_desc'];

	$baiviet_con = $_POST['baiviet_con'];

	$baiviet_status = $_POST['baiviet_status'];
	


	$query = "INSERT INTO artices_item(baiviet_name,baiviet_image,baiviet_desc,baiviet_content, baiviet_status) 
	values('".$baiviet_name."','".$image."','".$baiviet_desc."','".$baiviet_con."','".$baiviet_status."')";

	mysqli_query($con, $query); 
	move_uploaded_file($image_tmp,'../../../upload/article/'.$image);
	Header('Location:../../?admin_control=quanlibaiviet');
}
else if(isset($_POST['edit-baiviet'])){

	$baiviet_name = $_POST['baiviet_name'];
	$image_update = $_FILES['image']['name'];
	$image = $_FILES['image']['name'];
	$image_tmp = $_FILES['image']['tmp_name'];
	$image = time().'_'.$image;

	$baiviet_desc = $_POST['baiviet_desc'];

	$baiviet_con = $_POST['baiviet_con'];

	$baiviet_status = $_POST['baiviet_status'];


	if ($image_update !='') 
	{
		$id = $_GET['id'];
		move_uploaded_file($image_tmp, '../../../upload/article/'.$image);
		$update = "UPDATE artices_item SET baiviet_name = '".$baiviet_name."',baiviet_image = '".$image."',baiviet_desc = '".$baiviet_desc."',baiviet_content = '".$baiviet_con."',baiviet_status = '".$baiviet_status."' WHERE baiviet_id ='".$_GET['id']."' " ;

		$sql = "SELECT * FROM artices_item  WHERE baiviet_id ='".$id."'";
		$query = mysqli_query($con, $sql);
		while ($row = mysqli_fetch_array($query)) {
		    unlink('../../../upload/article/'.$row["baiviet_image"]);
		}
	}
	else if($image_update =='') {
	$update = "UPDATE artices_item SET baiviet_name = '".$baiviet_name."',baiviet_desc = '".$baiviet_desc."',baiviet_content = '".$baiviet_con."',baiviet_status = '".$baiviet_status."' WHERE baiviet_id ='".$_GET['id']."' " ;
	}
	mysqli_query($con, $update); 
	Header('Location:../../?admin_control=quanlibaiviet');

}
else{
	$id = $_GET['id'];
	$query1 = "DELETE FROM artices_item WHERE baiviet_id ='".$id."'";
	mysqli_query($con, $query1); 
	Header('Location:../../?admin_control=quanlibaiviet');
}

?>
