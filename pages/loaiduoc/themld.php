<?php
    session_start();
    if (isset($_SESSION['NV_MAIL'])){
        $ten=$_POST['ld_ten'];
        include '../../connectsql.php';
        $sql="INSERT INTO loaiduoc ( LD_TENLOAI ) VALUE ('$ten')";
        $con->query($sql);
        $_SESSION['message'] = "Đã thêm";
        header("location: loaiduoc.php");
        $con->close();
    }
    else {
        include "../../connectlogin.php"; 
    }
?>