<html>
<head>
    <title>添加管理员信息</title>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
    <link href="css/style.css" rel="stylesheet">
</head>
<script>
    function check(form1){
        if (form1.name.value == ""){
            alert("请输入管理员名称！");
            form1.name.focus();
            return false;
        }

        if (form1.pwd.value == ""){
            alert("请输入管理员密码！");
            form1.pwd.focus();
            return false;
        }

        if (form1.pwd1.value == ""){
            alert("请确认管理员密码！");
            form1.pwd1.focus();
            return false;
        }

        if (form1.pwd.value != form1.pwd1.value){
            alert("您两次输入的管理员密码不一致，请重新输入！");
            form1.pwd1.focus();
            return false;
        }
    }
</script>
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
                                    <form name="form1" method="post" action="manager_ok.php">
                                        <table height="123" border="0" cellpadding="0" cellspacing="0">
                                            <tr>
                                                <td width="97" height="30" align="center">
                                                    管理员名称：
                                                </td>
                                                <td width="178">
                                                    <input name="name" type="text">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td height="28" align="center">
                                                    管理员密码：
                                                </td>
                                                <td>
                                                    <input type="password" name="pwd" id="pwd">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td height="28" align="center">
                                                    确认密码：
                                                </td>
                                                <td>
                                                    <input type="password" name="pwd1" id="pwd1">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td height="37" align="center">
                                                    &nbsp;
                                                </td>
                                                <td>
                                                    <input name="submit" type="submit" class="btn_grey" value="保存" onclick="return check(form1)">
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
                    <td>
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