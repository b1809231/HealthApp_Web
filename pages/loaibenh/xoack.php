<?php 
    session_start();
    include '../../connectsql.php';
    $id=$_GET['id_ck'];
    $sql = "DELETE FROM chuyenkhoa WHERE CK_ID='$id'";
    $result=$con->query($sql);
        if ( $result==TRUE) {
            $_SESSION['message'] = "Đã xóa";
            header("location: loaibenh.php");
        }
        else {
             echo "Lỗi cập nhật " .$con->error;
        }       
    $con->close();
      
?>