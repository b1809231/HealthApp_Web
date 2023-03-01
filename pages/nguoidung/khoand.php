<?php
 include '../../connectsql.php';
 $id=$_GET['id_nd'];    
    $sql = "UPDATE nguoidung SET ND_TRANGTHAI=0 WHERE ND_ID='$id'";
    //echo $sql;
    $result=$con->query($sql);
        if ( $result==TRUE) {
            $_SESSION['message'] = "Đã khóa";
            header("location: ../nguoidung/nguoidung.php");
        }
        else {
             echo "Error updating record: " .$con->error;
        }       
    //dong ket noi
    $con->close();

        
?>
?>