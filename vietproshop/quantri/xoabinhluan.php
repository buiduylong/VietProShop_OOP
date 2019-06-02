<?php 
session_start();

if($_SESSION['email'] && $_SESSION['mk'])
{
	$id_bl=$_GET['id_bl'];
	include_once './ketnoi.php';
	$sql = "DELETE FROM blsanpham WHERE id_bl = '$id_bl'";
	$query = mysqli_query($conn, $sql);
	header('location: quantri.php?page_layout=danhsachbinhluan');
}
else{
	header('location: dangnhap.php');
}

?>