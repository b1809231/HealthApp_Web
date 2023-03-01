<?php 
    session_start();
    include '../../connectsql.php';
    $id=$_GET['id_d'];
    $sql = "DELETE FROM duoc WHERE D_ID='$id'";
    $result=$con->query($sql);
        if ( $result==TRUE) {
            $_SESSION['message'] = "Đã xóa";
            header("location: duoc.php");
        }
        else {
             echo "Lỗi cập nhật " .$con->error;
        }       
    $con->close();
      
?>