<?php
 include '../../connectsql.php';
 $id=$_GET['id_l'];    
    $sql = "UPDATE lichtuvan SET L_TRANGTHAI=0 WHERE L_ID='$id'";
    //echo $sql;
    $result=$con->query($sql);
        if ( $result==TRUE) {
            $_SESSION['message'] = "Đã hủy";
            header("location: ../lichhen/lichhen.php");
        }
        else {
             echo "Error updating record: " .$con->error;
        }       
    //dong ket noi
    $con->close();

        
?>
?>