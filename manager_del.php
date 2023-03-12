<?php
header("content-type:text/html;charset=utf-8");
include "conn/conn.php";
$id = $_GET['id'];
$sql = mysqli_query($conn, "delete from tb_manager where id='$id'");
$query = mysqli_query($conn, "delete from tb_purview where id='$id'");
if ($sql == true and $query == true){
    echo "<script>alert('管理员删除成功！'); history.back();</script>";
}else{
    echo "<script>alert('管理员删除失败！'); history.back();</script>";
}
?>