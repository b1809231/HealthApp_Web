<?php 
    session_start();
    include '../../connectsql.php';
    $id=$_GET['id_bt'];
    $sql = "DELETE FROM bantin WHERE BT_ID='$id'";
    $result=$con->query($sql);
        if ( $result==TRUE) {
            $_SESSION['message'] = "Đã xóa";
            header("location: bantin.php");
        }
        else {
             echo "Lỗi cập nhật " .$con->error;
        }       
    $con->close();
      
?>