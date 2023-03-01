<?php
 include '../../connectsql.php';
 $id=$_GET['id_nv'];    
    $sql = "UPDATE NHANVIEN SET NV_TRANGTHAI=0 WHERE NV_ID='$id'";
    //echo $sql;
    $result=$con->query($sql);
        if ( $result==TRUE) {
            $_SESSION['message'] = "Đã khóa";
            header("location: ../nhanvien/nhanvien.php");
        }
        else {
             echo "Error updating record: " .$con->error;
        }       
    //dong ket noi
    $con->close();

        
?>
?>