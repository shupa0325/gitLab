<!DOCTYPE html>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/checkCreate.js"></script>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    </head>
    <body>
        <?php include "title";?>
        <form class="form-create" form method="post" action = "controllers/checkSameController.php?flag='create'">
                <table width="300" border="0" align="center" cellpadding="5" cellspacing="0" bgcolor="#F2F2F2">
                <tr>
                <td colspan="2" align="center" bgcolor="#CCCCCC">
                    <font color="#FFFFFF">創建會員(*為必填資料)</font>
                </td>
            </tr>
            <tr>
                <td width="80" align="center" valign="baseline">*帳號</td>
                <td valign="baseline">
                    <input type="text" name="pAccount" id="pAccount" maxlength="20" value="shupa0325" />
            </tr>
            <tr>
                <td width="80" align="center" valign="baseline"></td>
                <td valign="baseline">
                    <div name="checkAccount" id="checkAccount"></div>
            </tr>
            <tr>
                <td width="80" align="center" valign="baseline">*密碼</td>
                <td valign="baseline">
                    <input type="password" name="pPassword" id="pPassword" maxlength="20" value="ssssssss" />
            </tr>
            <tr>
                <td width="80" align="center" valign="baseline"></td>
                <td valign="baseline">
                    <div name="checkPwd" id="checkPwd"></div>
            </tr>
            <tr>
                <td width="80" align="center" valign="baseline">*密碼確認</td>
                <td valign="baseline">
                    <input type="password" name="pwdCheck" id="pwdCheck" maxlength="20" value="ssssssss" />
            </tr>
            <tr>
                <td width="80" align="center" valign="baseline"></td>
                <td valign="baseline">
                    <div name="checkAgain" id="checkAgain"></div>
            </tr>
            <tr>
                <td width="80" align="center" valign="baseline">*姓名</td>
                <td valign="baseline">
                    <input type="text" name="chineseName" id="chineseName" maxlength="5" value="蔡承軒" />
            </tr>
            <tr>
                <td width="80" align="center" valign="baseline">英文姓名</td>
                <td valign="baseline">
                    <input type="text" name="englishName" id="englishName" maxlength="20" value="Shupa" />
            </tr>
            <tr>
                <td width="80" align="center" valign="baseline">生日</td>
                <td valign="baseline">
                    <input type="date" name="birthday" id="birthday" />
            </tr>
            <tr>
                <td width="80" align="center" valign="baseline">*電子郵件</td>
                <td valign="baseline">
                    <input type="email" name="email" id="email" maxlength="30" value="fir325vm0@gmail.com" />
            </tr>
            <tr>
                <td width="80" align="center" valign="baseline">電話</td>
                <td valign="baseline">
                    <input type="text" name="phoneNumber" id="phoneNumber" onkeypress='return event.charCode >= 48 && event.charCode <= 57' value=""
                    maxlength="10"/>
            </tr>
            <tr>
                <td width="80" align="center" valign="baseline">地址</td>
                <td valign="baseline">
                    <input type="text" name="address" id="address" value="" />
            </tr>
            <tr>
                <td colspan="2" align="center" bgcolor="#CCCCCC">
                    <input type="submit" value="create" name="create" id="create"/>
                    <input type="reset" value="clear" name="res" />
                    <input type="button" value="button" name="button" id="button" />
                </td>
            </tr>
            </form>
                    
    </body>
</html>