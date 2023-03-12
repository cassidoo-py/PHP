<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
<table width="312" height="215" border="0" cellspacing="0" cellpadding="0" background="Images/subBG.jpg">
    <tr>
        <td valign="top">
            <table width="100%" border="0" cellpadding="0" cellspacing="0">
                <tr>
                    <td width="3%" height="25">
                        &nbsp;
                    </td>
                    <td width="94%">
                        &nbsp;
                    </td>
                    <td width="3%">
                        &nbsp;
                    </td>
                </tr>
                <tr>
                    <td>
                        &nbsp;
                    </td>
                    <td>
                        <table width="100%" height="131" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                                <td align="center" valign="top">
                                    <form name="form1" method="post" action="manager_modifyok.php">
                                        <?php
                                        include "conn/conn.php";
                                        $id = $_GET['id'];
                                        $query = mysqli_query($conn, "select m.id, m.name, p.sysset, p.readerset, p.bookset, p.borrowback, p.sysquery from tb_manager as m left join (select * from tb_purview) as p on m.id=p.id where m.id='$id'");
                                        $info = mysqli_fetch_array($query);
                                        ?>
                                        <table height="126" border="0" cellpadding="0" cellspacing="0">
                                            <tr>
                                                <td width="90" height="29" align="center">
                                                    管理员名称：
                                                </td>
                                                <td>
                                                    <input type="hidden" name="id" value="<?php echo $info['id']; ?>">
                                                    <input type="text" name="name" readonly value="<?php echo $info['name']; ?>">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td height="74" align="center">
                                                    拥有的权限：
                                                </td>
                                                <td>
                                                    <table width="100%" height="67" border="0" cellspacing="0" cellpadding="0">
                                                        <tr>
                                                            <td>
                                                                <input type="checkbox" name="sysset" class="noborder" id="sysset" value="1" <?php if ($info['sysset'] == 1){echo ("checked");}?>>
                                                                系统设置
                                                                <input type="checkbox" name="readerset" class="noborder" id="readerset" value="1" <?php if ($info['readerset'] == 1){echo ("checked");}?>>
                                                                读者管理
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <input type="checkbox" name="bookset" class="noborder" id="bookset" value="1" <?php if ($info['bookset'] == 1){echo ("checked");}?>>
                                                                图书管理
                                                                <input type="checkbox" name="borrowback" class="noborder" id="borrowback" value="1" <?php if ($info['borrowback'] == 1){echo ("checked");}?>>
                                                                图书借还
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td height="23">
                                                                <input type="checkbox" name="sysquery" class="noborder" id="sysquery" value="1" <?php if ($info['sysquery'] == 1){echo ("checked");}?>>
                                                                系统查询
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td height="22" align="center">
                                                    &nbsp;
                                                </td>
                                                <td>
                                                    <input type="submit" name="submit" class="btn_grey" value="保存">
                                                    &nbsp;
                                                    <input type="button" name="submit2" class="btn_grey" value="关闭" onclick="window.close();">
                                                </td>
                                            </tr>
                                        </table>
                                    </form>
                                </td>
                            </tr>
                        </table>
                    </td>
                    <td>
                        &nbsp;
                    </td>
                </tr>
                <tr>
                    <td height="17">
                        &nbsp;
                    </td>
                    <td>
                        &nbsp;
                    </td>
                    <td>
                        &nbsp;
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>
</body>
</html>