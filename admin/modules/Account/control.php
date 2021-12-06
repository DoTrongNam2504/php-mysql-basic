
<?php 


include ('../../../config/config.php');


if(isset($_POST['add-account'])){

	$admin_name = $_POST['admin_name'];

	$admin_email = $_POST['admin_email'];


	$admin_pass = md5($_POST['admin_pass']);

	$admin_status = $_POST['admin_status'];

	$query = "INSERT INTO admin(admin_name, email, password,status) values('".$admin_name."','".$admin_email."','".$admin_pass."','".$admin_status."')";
	mysqli_query($con, $query); 
	Header('Location:../../?admin_control=quanlitaikhoan');
}

else if(isset($_POST['edit-account'])){

	$id_toi = $_GET['id'];

			$sql1 ="SELECT * FROM admin WHERE admin_id = '".$id_toi."'";

			$row1 = mysqli_query($con,$sql1);

			$row_admin = mysqli_fetch_array($row1);

	$password_cu = $row_admin['password'];


	$admin_name = $_POST['admin_name'];

	$admin_email = $_POST['admin_email'];


	$admin_pass_old = md5($_POST['admin_pass_old']);

	$admin_pass_new = md5($_POST['admin_pass_new']);

	$admin_status = $_POST['admin_status'];
	if($password_cu == $admin_pass_old){

		$query = "UPDATE admin SET 
		admin_name = '".$admin_name."',
		email = '".$admin_email."',
		password = '".$admin_pass_new."',
		status = '".$admin_status."'
		WHERE admin_id ='".$id_toi."'";
	
		mysqli_query($con, $query); 
		Header('Location:../../?admin_control=quanlitaikhoan');

	}else{

		header("Location:../../?admin_control=quanlitaikhoan&query=edit&id=$id_toi");


	}

	
}
else{
	$id = $_GET['id'];
	$query1 = "DELETE FROM admin WHERE admin_id='".$id."'";
	mysqli_query($con, $query1); 
	Header('Location:../../?admin_control=quanlitaikhoan');
}

 ?>