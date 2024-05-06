<?php 
	include("../../config/connection.php");
	session_start();
	if (isset($_GET['id'])) {
	$sql_xoa_detail="DELETE FROM chitietdonhang where chitietdonhang.ID_DonHang='".$_GET['id']."'";
	$sql_xoa="DELETE FROM donhang where donhang.ID_DonHang='".$_GET['id']."'";
    mysqli_query($mysqli,$sql_xoa_detail);
    mysqli_query($mysqli,$sql_xoa);
  	header('location:../../index.php?order=success-order-list');
	}
?>
