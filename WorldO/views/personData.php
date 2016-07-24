<!DOCTYPE html>
<html>
    <head>
        <?PHP include_once('config.php'); ?>
        <?= $this->script('personData') ?>
    </head>
     <body style="background-color:#5599FF; ">
    <?php include "title.php";?>
      <form class="form-change" form method="post" action = "/WorldO/data/updateData">
                <table width="300" border="0" align="center" cellpadding="5" cellspacing="0" bgcolor="#F2F2F2">
                <tr>
                <td colspan="2" align="center" bgcolor="#CCCCCC">
                    <font color="#FFFFFF">會員資料</font>
                </td>
            </tr>
            <tr>
                <td width="80" align="center" valign="baseline">帳號</td>
                <td valign="baseline">
                    <h5 name="pAccount" id="pAccount"><?php echo $_SESSION['username'];?></h5>
            </tr>
            <tr>
                <td width="80" align="center" valign="baseline">舊密碼</td>
                <td valign="baseline">
                    <input type="password" name="pPassword" id="pPassword" maxlength="20" value="" required/>
            </tr>
            <tr>
                <td width="80" align="center" valign="baseline">新密碼</td>
                <td valign="baseline">
                    <input type="password" name="newPassword" id="newPassword" maxlength="20" value="" required/>
            </tr>
            <tr>
                <td width="80" align="center" valign="baseline"></td>
                <td valign="baseline">
                    <div name="checkPwd" id="checkPwd"></div>
            </tr>
            <tr>
                <td width="80" align="center" valign="baseline">密碼確認</td>
                <td valign="baseline">
                    <input type="password" name="pwdCheck" id="pwdCheck" maxlength="20" value="" required />
            </tr>
            <tr>
                <td width="80" align="center" valign="baseline"></td>
                <td valign="baseline">
                    <div name="checkAgain" id="checkAgain"></div>
            </tr>
            <tr>
                <td width="80" align="center" valign="baseline">姓名</td>
                <td valign="baseline">
                    <h5 name="chineseName" id="chineseName"><?php echo $_SESSION['username'];?></h5>
            </tr>
            <tr>
                <td width="80" align="center" valign="baseline">英文姓名</td>
                <td valign="baseline">
                    <input type="text" name="englishName" id="englishName" maxlength="20" value="<?php echo $_SESSION['englishName'];?>" />
                <div name="checkeName" id="checkeName"></div>
            </tr>
            <tr>
                <td width="80" align="center" valign="baseline"  >生日</td>
                <td valign="baseline">
                    <h5 name="birthday" id="birthday"><?php echo $_SESSION['birthday'];?></h5>
            </tr>
            <tr>
                <td width="80" align="center" valign="baseline" >電子郵件</td>
                <td valign="baseline">
                    <h5 name="email" id="email"><?php echo $_SESSION['email'];?></6666h5>
            </tr>
            <tr>
                <td width="80" align="center" valign="baseline">電話</td>
                <td valign="baseline">
                    <input type="text" name="phoneNumber" id="phoneNumber" onkeypress='return event.charCode >= 48 && event.charCode <= 57' value="<?php echo $_SESSION['phoneNumber'];?>"
                    maxlength="10"/>
            </tr>
            <tr>
                <td width="80" align="center" valign="baseline">地址</td>
                <td valign="baseline">
                    <input type="text" name="address" id="address" value="<?php echo $_SESSION['address'];?>" />
            </tr>
            <tr>
                <td colspan="2" align="center" bgcolor="#CCCCCC">
                    <input type="button" value="change" name="change" id="change"/>
                </td>
            </tr>
            </form>
    </body>
</html>