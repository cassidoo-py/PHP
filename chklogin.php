<?php
session_start();
header("content-type:text/html;charset=utf-8");
$A_name = $_POST['name'];
$A_pwd = $_POST['pwd'];

class chkinput{
    var $name;
    var $pwd;

    function __construct($x, $y){
        $this->name = $x;
        $this->pwd = $y;
    }

    function checkinput(){
        include ("conn/conn.php");
        $sql = mysqli_query($conn, "select * from tb_manager where name='".$this->name."' and pwd='".$this->pwd."'");
        $info = mysqli_fetch_array($sql);
        if ($info == false){
            echo "<script>alert('您输入的管理员名称或密码错误，请重新输入！');history.back();</script>";
            exit;
        }else{
            echo "<script>alert('管理员登陆成功！');window.location='index.php';</script>";
            $_SESSION['admin_name'] = $info['name'];
            $_SESSION['pwd'] = $info['pwd'];
        }
    }
}
$obj = new chkinput(trim($A_name), trim($A_pwd));
$obj->checkinput();
?>