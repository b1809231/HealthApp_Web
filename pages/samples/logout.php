<?php
    session_start();
    if (isset($_SESSION['NV_MAIL']) && $_SESSION['NV_MAIL']!=NULL){
        unset($_SESSION['NV_MAIL']);
       
    }
     header ("location:  login.php");   
?>