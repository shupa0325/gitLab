<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>前台 </title>
        <?= $this->script('jquery') ?>
        <?= $this->script('bootstrap.min') ?>
        <?= $this->css('bootstrap.min') ?>
    </head>
    <body>
        <?php require_once("basic.html");?>
        <table width="300" border="0" align="center" cellpadding="5" cellspacing="0" bgcolor="#F2F2F2">
            <tr>
                <td colspan="2" width="80" align="center" valign="baseline" bgcolor="#CCCCCC">建立成功</td>
                <td valign="baseline">
            </tr>
            <tr>
                <td width="80" align="center" valign="baseline">URL為:</td>
                <td valign="baseline">
                    <input type="text" name="URL" id="URL" value="<?php echo " https://day1-shupa-tsai.c9users.io/challenge2/reception/checkActivity/$data ";?>" required/>
            </tr>
        </table>
</html>
