<?php
header("content-type:text/html;charset=utf-8");
include "conn/conn.php";
if ($_POST['submit'] != ""){
    $name = $_POST['name'];
    $pwd = $_POST['pwd'];
    $sql = mysqli_query($conn, "insert into tb_manager (name, pwd) values ('$name', '$pwd')");
    if ($sql == true){
        echo "<script>alert('管理员添加成功！');window.close();window.opener.location.reload();</script>";
    }else{
        echo "<script>alert('管理员添加失败！');window.close();window.opener.location.reload();</script>";
    }
}
?>