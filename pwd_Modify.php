<?php
session_start();
?>
<html>
<head>
    <title>图书馆管理系统</title>
    <link href="css/style.css" rel="stylesheet">
</head>
<script>
    function checkForm(form){
        if (form.oldpwd.value == ""){
            alert("请输入原密码！");
            form.oldpwd.focus();
            return false;
        }

        if (form.oldpwd.value != form.holdpwd.value){
            alert("您输入的原密码不正确，请重新输入！");
            form.oldpwd.value = "";
            form.oldpwd.focus();
            return false;
        }

        if (form.pwd.value == ""){
            alert("请输入新密码！");
            form.pwd.focus();
            return false;
        }

        if (form.pwd1.value == ""){
            alert("请确认新密码！");
            form.pwd1.focus();
            return false;
        }

        if (form.pwd.value != form.pwd1.value){
            alert("您两次输入的密码不一致，请重新输入！");
            form.pwd.value = "";
            form.pwd1.value = "";
            form.pwd.focus();
            return false;
        }
    }
</script>
<body>
<table width="776" border="0" align="center" cellpadding="0" cellspacing="0" class="tableBorder">
    <tr>
        <td>
            <?php
            include "navigation.php";
            ?>
        </td>
    </tr>
    <td>
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
                <td valign="top" bgcolor="#FFFFFF">
                    <table width="99%" height="510" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF" class="tableBorder_gray">
                        <tr>
                            <td height="510" valign="top" style="padding: 5px;">
                                <table width="98%" height="487" border="0" cellspacing="0" cellpadding="0">
                                    <tr>
                                        <td height="22" valign="top" class="word_orange">
                                            当前位置：更改口令&gt;&gt;&gt;
                                        </td>
                                    </tr>
                                    <tr>
                                        <td align="center" valign="top">
                                            <table width="100%" border="0" cellpadding="0" cellspacing="0">
                                                <tr>
                                                    <td width="84%">
                                                        &nbsp;
                                                    </td>
                                                </tr>
                                            </table>
                                            <form name="form1" method="post" action="pwd_ok.php">
                                                <table width="47%" border="0" cellspacing="0" cellpadding="0" bordercolor="#FFFFFF" bordercolordark="#D2E3E6" bordercolorlight="#FFFFFF">
                                                    <?php
                                                    include "conn/conn.php";
                                                    $query3 = mysqli_query($conn, "select pwd from tb_manager where name='".$_SESSION['admin_name']."'");
                                                    $info3 = mysqli_fetch_array($query3);
                                                    ?>
                                                    <tr align="center">
                                                        <td width="27%" align="left" style="padding: 5px;">
                                                            管理员名称:
                                                        </td>
                                                        <td width="73%" align="left">
                                                            <input type="text" name="name" id="name" value="<?php echo $_SESSION['admin_name']; ?>" readonly="yes" size="30">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td align="left" style="padding: 5px;">
                                                            原密码：
                                                        </td>
                                                        <td align="left">
                                                            <input name="oldpwd" type="password" id="oldpwd" size="30">
                                                            <input type="hidden" name="holdpwd" id="holdpwd" value="<?php echo $info3['pwd'];?>">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td align="left" style="padding: 5px;">
                                                            新密码：
                                                        </td>
                                                        <td align="left">
                                                            <input type="password" name="pwd" id="pwd" size="30">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td align="left" style="padding: 5px;">
                                                            确认新密码：
                                                        </td>
                                                        <td align="left">
                                                            <input type="password" name="pwd1" id="pwd1" size="30">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td height="65" align="left" style="padding: 5px;">
                                                            &nbsp;
                                                        </td>
                                                        <td>
                                                            <input type="submit" name="submit" class="btn_grey" value="保存" onclick="return checkForm(form1)">
                                                            &nbsp;
                                                            <input type="reset" name="submit2" class="btn_grey" value="取消">
                                                        </td>
                                                    </tr>
                                                </table>
                                            </form>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                    <?php
                    include "copyright.php";
                    ?>
                </td>
            </tr>
        </table>
    </td>
</table>
</body>
</html>
