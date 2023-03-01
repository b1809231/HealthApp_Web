<?php 
    session_start();
    include '../../connectsql.php';
    $id=$_GET['id_b'];
    $sql = "DELETE FROM benh WHERE B_ID='$id'";
    $result=$con->query($sql);
        if ( $result==TRUE) {
            $_SESSION['message'] = "Đã xóa";
            header("location: benh.php");
        }
        else {
             echo "Lỗi cập nhật " .$con->error;
        }       
    $con->close();
      
?>