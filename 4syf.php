<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>显示图形</title>
<style type="text/css">
body {margin: 0px;}
td   {font-size:12px;color:#000;font-family: Helvetica, sans-serif, "宋体";}
</style>
</head>
<body>
    <?php
      for($i=1;$i<=9;$i++)
       {
           for($j=9;$j>=$i;$j--)
         {
             echo"+";
         }
         echo"<br>";
      }
    ?>
</body>
</html>
