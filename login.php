<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<head>
    <title>学校图书管理系统</title>
    <link href="css/style.css" rel="stylesheet">
    <script>
        function check(form){
            if (form.name.value == ""){
                alert("请输入管理员名称！");
                form.name.focus();
                return false;
            }

            if (form.pwd.value == ""){
                alert("请输入密码！");
                form.pwd.focus();
                return false;
            }
        }
    </script>
</head>
<body bgcolor="#89D1E6">
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<form name="form1" method="post" action="chklogin.php">
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
            <td width="30%" bgcolor="#86C1E6">
                &nbsp;
            </td>
            <td width="603" background="Images/bg.gif">
                <table width="603" height="243" border="0" cellpadding="0" cellspacing="0" bordercolorlight="#FFFFFF" bordercolordark="#D2E3E6">
                    <tr>
                        <td width="70%" height="100" align="center">
                            &nbsp;
                        </td>
                        <td width="30%">
                            &nbsp;
                        </td>
                    </tr>
                    <tr>
                        <td height="30" align="center">
                            管理员名称：
                            <input type="text" name="name" class="logininput" id="name3" size="25">
                        </td>
                        <td height="30" valign="top">
                            &nbsp;
                        </td>
                    </tr>
                    <tr>
                        <td height="30" align="center">
                            管理员密码：
                            <input type="password" name="pwd" class="logininput" id="pwd2" size="25">
                        </td>
                        <td height="30" valign="top">
                            &nbsp;
                        </td>
                    </tr>
                    <tr>
                        <td height="50" align="center">
                            <input type="submit" name="submit" class="btn_grey" value="确定" onclick="return check(form1)">
                            <input type="reset" name="submit3" class="btn_grey" value="重置">
                            <input type="button" name="submit2" class="btn_grey" value="关闭" onclick="window.close();">
                        </td>
                        <td height="30" align="center" valign="top">
                            &nbsp;
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" align="center"></td>
                    </tr>
                </table>
            </td>
            <td bgcolor="#86C1E6">
                <br>
            </td>
        </tr>
    </table>
    <div align="center">
        <br>
        &nbsp;&nbsp;&nbsp;&nbsp;CopyRight&copy;2019 www.mingribook.com &nbsp;常州工业职业技术学院图书馆
    </div>
</form>
</body>
</html>