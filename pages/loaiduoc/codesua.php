<?php
    session_start();
   include('../../connectsql.php');
      if(isset($_POST['btnsua'])){
$id =$_POST['idloai'];
$ten=$_POST['tenloai'];
$querry="UPDATE loaiduoc SET LD_TENLOAI='$ten' WHERE LD_ID='$id'";
$querry_run = mysqli_query($con, $querry);
if($querry_run){
    $_SESSION['message'] = "Đã sửa";
    header('Location: loaiduoc.php');
    exit(0);
}
      }
?>