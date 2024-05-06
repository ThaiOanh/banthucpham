<?php 
    include("../../config/connection.php"); 
    if (isset($_GET['id'])) {
        $ID_DonHang=$_GET['id'];
        $XuLy = $_GET['XuLy'];
    $sql_Order="UPDATE donhang SET XuLy='".$XuLy."' where  
        ID_DonHang=$ID_DonHang";
        mysqli_query($mysqli,$sql_Order);
        header('location: ../../index.php?order=success-order-list');
    }
?>