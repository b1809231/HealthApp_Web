<?php 
    session_start();
    include '../../connectsql.php';
    $id=$_GET['id_l'];
    $sql = "DELETE FROM lichtuvan WHERE L_ID='$id'";
    $result=$con->query($sql);
        if ( $result==TRUE) {
            $_SESSION['message'] = "Đã xóa";
            header("location: lichhen.php");
        }
        else {
             echo "Lỗi cập nhật " .$con->error;
        }       
    $con->close();
      
?>