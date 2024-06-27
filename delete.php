<?php
include 'conn.php';
if(isset($_GET['id'])){
	$id = $_GET['id'];
	//$sql= "delete from users where 'deleteid' = '$id' ";
	$sql= "DELETE from `tutor_register` where id = $id";
	$result = mysqli_query($conn,$sql);
	if ($result) {
		// code...
		echo "<script>alert('successfully Deleted !!')</script>";
		 echo "<script>window.location='view_tutor.php';</script>";
	}
	else{
		die(mysqli_error(conn));
	}
}
#`buycar`
?>
