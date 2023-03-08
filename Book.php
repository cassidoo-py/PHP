<?php session_start(); ?>
<html>
<head>
<title>图书馆管理系统</title>
<link href="CSS/style.css" rel="stylesheet">
</head>
<body>
<table width="1000" border="O" align="center" cellpadding="o" cellspacing="o"
class="tableBorder">
<tr>
<td>
<?php include("navigation.php");?>
</td>
</tr>
<td>
    <table width="100%" border="0" cellspacing="o" cellpadding="0">
        <tr>
            <td valign="top" bgcolor-="#FFFFF"><table width="99%" border="0" align="center" cellpadding="O". cellspacing="O" bgcolor="#FFFFFF" class="tableBorder_ gray">
        <tr>
            <td valign="top" style="padding: 5px"><table width="98%" border="0" cellspacing="o" cellpadding="0">
             <tr>
                 <td height="22" valign="top" class="word_orange">当前位置：图书管理 &gt; 图书档案管理 &gt;&gt;&gt;</td>
             </tr>
                    <tr>
                    <td align="center" valign="top">
                        <?php
                        include ("conn/conn.php");
                        $query=mysqli_query($conn,"select book.barcode,book.id as bookid,book.bookname,bt.typename,pb.pubname,bc,name from tb_bookinfo book join
tb_booktype bt on book.typeid=bt.id join tb_publishing pb on book.ISBN join tb_bookcase bc on book.bookcase=bc.id");
                        $result=mysqli_fetch_array($query);
                        if($result==false){
                            ?>
                        <table width="100%" height="30" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                                <td height="36" align="center">暂无图书信息!</td>
                            </tr>
                        </table>
                    <table width="100%" border="0" cellpadding="0" cellspacing="0">
                        <tr>
                        <td>
                            <a href="book_add.php">添加图书信息</a></td>
                        </tr>
                    </table>
                    <?php
                     }else{
    ?>
                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                            <tr height="30">
                                <td width="87%">&nbsp;</td>
                                <td width="13%">
                                    <a href="book_add.php">添加图书信息</a>
                                </td>
                            </tr>
                        </table>
                    <table width="98%" border="1" cellpadding="0" cellspacing="0" bordercolor="#E1E1E1" style="border-collapse: collapse;">
                        <tr height="30" align="center" bgcolor="#e3F4F7">
                            <td width="13%">条形码</td>
                            <td width="26%">图书名称</td>
                            <td width="15%">图书类型</td>
                            <td width="14%">出版社</td>
                            <td width="12%">书架</td>
                            <td width="6%">修改</td>
                            <td width="5%">删除</td>
                        </tr>
                        <?php do{ ?>
                        <tr>
                            <td><?php echo $result['barcode'];?></td>
                        <td><a href="book_look.php ?id=<?php echo $result['bookid'];?>"><?php echo $result['bookname'];?></a></td>
                        <td><?php echo $result['typename'];?></td>
                            <td><?php echo $result['pubname'];?></td>
                            <td><?php echo $result['name'];?></td>
                            <td align="center"><a href="book_Modify.php?id=<?php echo  $result['bookid'];?>">修改</a></td>
                            <td align="center"><a href="book_del.php?id=<?php echo  $result['bookid'];?>">删除</a></td>
                        </tr>
                        <?php
                        }while($result=mysqli_fetch_array($query));
                        }
                        ?>
                    </table></td>
                    </tr>
                </table>
            </td>
        </tr>
                </table><?php include ("copyright.php");?></td>
        </tr>
    </table>
</td>
    </tr>
</table>
</body>
</html>
