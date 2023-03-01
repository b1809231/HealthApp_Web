<?php 
    session_start();
    include '../../connectsql.php';
    $id=$_GET['id_ld'];
    $sql = "DELETE FROM loaiduoc WHERE LD_ID='$id'";
    $result=$con->query($sql);
        if ( $result==TRUE) {
            $_SESSION['message'] = "Đã xóa";
            header("location: loaiduoc.php");
        }
        else {
             echo "Lỗi cập nhật " .$con->error;
        }       
    $con->close();
      
?>