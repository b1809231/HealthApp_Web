<?php
    session_start();
    if (isset($_SESSION['NV_MAIL'])){
        $ten=$_POST['ck_ten'];
        include '../../connectsql.php';
        $sql="INSERT INTO chuyenkhoa ( CK_TEN ) VALUE ('$ten')";
        $con->query($sql);
        $_SESSION['message'] = "Đã thêm";
        header("location: loaibenh.php");
        $con->close();
    }
    else {
        include "../../connectlogin.php"; 
    }
?>