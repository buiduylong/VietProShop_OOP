<?php
session_start();
if(isset($_SESSION['email'])){
    session_destroy();
    header('location: dangnhap.php');
}
else{
    header('location: dangnhap.php');
}
?>