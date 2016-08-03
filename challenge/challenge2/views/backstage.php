<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>後台 </title>
        <?= $this->script('jquery') ?>
        <?= $this->script('bootstrap.min') ?>
        <?= $this->css('bootstrap.min') ?>
    </head>
    <body>
        <?php require_once("basic.html");?>
        <form class="form-create" form method="post" action = "backstage/createAct">
                <table width="300" border="0" align="center" cellpadding="5" cellspacing="0" bgcolor="#F2F2F2">
                <tr>
                <td colspan="2" align="center" bgcolor="#CCCCCC">
                    <font color="#FFFFFF">新建活動</font>
                </td>
            </tr>
            <tr>
                <td width="80" align="center" valign="baseline">活動名稱</td>
                <td valign="baseline">
                    <input type="text" name="activityName" id="activityName" maxlength="20" value="" required/>
            </tr>
            <tr>
                <td width="80" align="center" valign="baseline">人數限制</td>
                <td valign="baseline">
                    <input type="Number" name="maxperson" id="maxperson" min="1" max="100" required/>
            </tr>
            <tr>
                <td width="80" align="center" valign="baseline">可攜眷數</td>
                <td valign="baseline">
                    <input type="Number" name="companion" id="companion" min="1" max="10" value="0"required/>
            </tr>
            <tr>
                <td width="80" align="center" valign="baseline">開始報名時間</td>
                <td valign="baseline">
                    <input type="datetime-local" name="beginTime" id="beginTime" value="<?php?>" required/>
            </tr>
            <tr>
                <td width="80" align="center" valign="baseline">截止日期</td>
                <td valign="baseline">
                    <input type="datetime-local" name="endTime" id="endTime" value="" required/>
            </tr>
            <?php if($data){?>
            <tr>
                <td colspan="2" width="80" align="center" valign="baseline" bgcolor="#CCCCCC">建立成功</td>
                <td valign="baseline">
            </tr>
            <tr>
                <td  width="80" align="center" valign="baseline">URL為:</td>
                <td valign="baseline">
                    <input type="text" name="URL" id="URL" value="<?php echo $data;?>" required/>
            </tr>
            <?php }else{    ?>
            <tr>
                <td colspan="2" align="center" bgcolor="#CCCCCC">
                    <input type="submit" value="create" name="createActivity" id="createActivity"/>
                </td>
            </tr>
            <?php }    ?>
            </form>
    </body>
</html>