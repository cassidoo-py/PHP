<?php session_start();?>
<html>
<head>
    <title>图书管理系统</title>
    <link href="css/style.css" rel="stylesheet">
</head>
<script language="JavaScript">
    function check(form) {
        if (form.barcode.value == "") {
            alert("请输入条形码1!");
            form.barcode.focus();
            return false;
        }
        if (form.bookName.value == "") {
            alert("请输入图书姓名!");
            form.bookName.focus();
            return false;
        }
        if (form.price.value == "") {
            alert("请输入图书定价!");
            form.price.focus();
            return false;
        }
        form.submit();
    }
</script>
<body>
<table width="776" border="0" align="center" cellspacing="0" cellpadding="0" class="tableBorder">
    <tr>
        <td>
            <?php include ("navigation.php") ;?>
        </td>
    </tr>
    <td>
        <table width="100%" border="0" cellpadding="0" cellspacing="0">
            <tr>
                <td valign="top" bgcolor="#FFFFFF"><table width="99%" border="0"  cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" class="tableBorder_gray">
<tr>
    <td align="center" valign="top" style="padding: 5px;"><table width="98%" border="0" cellpadding="0" cellspacing="0">
            <tr>
                <td height="22" valign="top" class="word_orange">当前位置：图书档案管理&gt;添加图书信息&gt;&gt;&gt;</td>
            </tr>
            <tr>
                <td align="center" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
   <tr>
       <td align="center" valign="top">
           <form name="form1" method="post" action="book_ok.php">
            <table width="600" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
                <tr>
                    <td width="173" align="center">条 &nbsp;形 &nbsp; 码:</td>
                    <td width="427" height="39"><input name="barcode" type="text" id="barcode"></td>
                </tr>
                <tr>
                    <td align="center">图书名称:</td>
                    <td height="39"><input name="bookName" type="text" id="bookName" size="50"></td>
                <td>
                    <select name="typeld" class="wenbenkuang" id="typeid">
                        <?php
                        include ("conn/conn.php");
                        $sql=mysqli_query($conn,"select * from tb_booktype");
                        $info=mysqli_fetch_array($sql);
                        do{
                            ?>
                        <option value="<?php echo $info['id'];?>"><?php echo $info['typename'];?></option>
                        <?php }while ($info=mysqli_fetch_array($sql));?>
                    </select></td>
                </tr>
                <tr>
                    <td align="center">作&者</td>
                </tr>
                </td>
            </table>
           </form>
       </td>
   </tr>
                    </table> </td>
            </tr>
        </table> </td>
</tr>
                    </table> </td>
            </tr>
        </table>
    </td>
</table>
</body>
</html>
