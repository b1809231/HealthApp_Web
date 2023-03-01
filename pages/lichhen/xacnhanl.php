<?php
 include '../../connectsql.php';
 $id=$_GET['id_l'];    
    $sql = "UPDATE lichtuvan SET L_TRANGTHAI=1 WHERE L_ID='$id'";
    //echo $sql;
    $result=$con->query($sql);
        if ( $result==TRUE) {
            $_SESSION['message'] = "Đã xác nhận";
            header("location: ../lichhen/lichhen.php");
        }
        else {
             echo "Error updating record: " .$con->error;
        }       
    //dong ket noi
    $con->close();

        
?>
?>