<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "healthapp";

$con= mysqli_connect($servername, $username, $password, $database);
    if(!$con)
    {
        header("Location: errors/dberrors.php");
        die();
    }
?>
