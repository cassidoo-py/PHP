<?php
session_start();
header("content-type:text/html;charset=utf-8");
if (!isset($_SESSION['admin_name'])){
    echo "<script>alert('对不起，请通过正确的途径登录图书管理系统！'); window.location.href='login.php';</script>";
}
?>