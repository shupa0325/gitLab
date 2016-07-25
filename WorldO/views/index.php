<!DOCTYPE html>
    <html>

    <head>
        <?PHP include_once('config.php'); ?>
        <?= $this->script('homepage') ?>
    </head>

    <body style="background-color:#5599FF; ">
        <div id="allpage">
            <?php include_once ("title.php");?>

            <form class="form-signin" style = "display : none"role="form "method = "post" action = "guest/loginAccount">
                <div class="container1" align="center" valign="center">
                    <div class="col-lg-4"></div>
                    <div class="col-lg-4" id="pageH">

                        <tr>
                            <h2 class="form-signin">Please sign in</h2>
                        </tr>
                        <tr>
                            <label for="inputText" class="sr-only">Account</label>
                            <input type="text" name = "inputAccount" id="inputAccount" class="form-control" placeholder="Account" required="" autofocus="">
                        </tr>
                        <tr>
                            <label for="inputPassword" class="sr-only">Password</label>
                            <input type="password" name = "inputPassword" id="inputPassword" class="form-control" placeholder="Password" required="">
                        </tr>
                        <tr>
                            <input type="checkbox" value="remember-me">Remember me
                        </tr>
                        <tr>
                            <button class="btn btn-lg btn-primary btn-block" id="signin" type="button">Sign in</button>
                        </tr>
                    </div>

                </div>
            </form>
            <form class="form-create"style = "display : none" form method="post" action = "guest/createAccount">
                <table width="300" border="0" align="center" cellpadding="5" cellspacing="0" bgcolor="#F2F2F2">
                <tr>
                <td colspan="2" align="center" bgcolor="#CCCCCC">
                    <font color="#FFFFFF">創建會員(*為必填資料)</font>
                </td>
            </tr>
            <tr>
                <td width="80" align="center" valign="baseline">*帳號</td>
                <td valign="baseline">
                    <input type="text" name="pAccount" id="pAccount" maxlength="20" value="" required/>
            </tr>
            <tr>
                <td width="80" align="center" valign="baseline"></td>
                <td valign="baseline">
                    <div name="checkAccount" id="checkAccount"></div>
            </tr>
            <tr>
                <td width="80" align="center" valign="baseline">*密碼</td>
                <td valign="baseline">
                    <input type="password" name="pPassword" id="pPassword" maxlength="20" value="" required/>
            </tr>
            <tr>
                <td width="80" align="center" valign="baseline"></td>
                <td valign="baseline">
                    <div name="checkPwd" id="checkPwd"></div>
            </tr>
            <tr>
                <td width="80" align="center" valign="baseline">*密碼確認</td>
                <td valign="baseline">
                    <input type="password" name="pwdCheck" id="pwdCheck" maxlength="20" value="" required />
            </tr>
            <tr>
                <td width="80" align="center" valign="baseline"></td>
                <td valign="baseline">
                    <div name="checkAgain" id="checkAgain"></div>
            </tr>
            <tr>
                <td width="80" align="center" valign="baseline">*姓名</td>
                <td valign="baseline">
                    <input type="text" name="chineseName" id="chineseName" maxlength="5" value="" required/>
            </tr>
            <tr>
                <td width="80" align="center" valign="baseline">英文姓名</td>
                <td valign="baseline">
                    <input type="text" name="englishName" id="englishName" maxlength="20" value="" />
            </tr>
            <tr>
                <td width="80" align="center" valign="baseline" >生日</td>
                <td valign="baseline">
                    <input type="date" name="birthday" id="birthday" required/>
            </tr>
            <tr>
                <td width="80" align="center" valign="baseline">*電子郵件</td>
                <td valign="baseline">
                    <input type="email" name="email" id="email" maxlength="30" value="" required/>
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
                    <input type="button" value="create" name="createA" id="createA"/>
                </td>
            </tr>
            </form>

        </div>

        </div>

        </div>
    </body>

    </html>