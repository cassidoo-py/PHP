<?php 
require_once'session.php';
header("Content-type:text/html;charset=utf-8");
session_unset();
session_destroy(); 
echo "<script>alert('ιεΊζε!');window.parent.location.href='../index.php'</script>"
?>