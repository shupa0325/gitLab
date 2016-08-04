<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>活動細節</title>
</head>

<body>
    <?php require_once("basic.html");?>
    <form class="form-create" form method="post" action="/challenge2/reception/joinActivity/<?php echo $data['ID'];?>">
        <table width="300" border="0" align="center" cellpadding="5" cellspacing="0" bgcolor="#F2F2F2">
            <tr>
                <td colspan="2" align="center" bgcolor="#CCCCCC">
                    <font color="#FFFFFF">新建活動</font>
                </td>
            </tr>
            <tr>
                <td width="80" align="center" valign="baseline">活動名稱 :
                    <?php echo $data['Aname'];?>
                </td>
            </tr>
            <tr>
                <td width="80" align="center" valign="baseline">人數限制 :
                    <?php echo $data['limitPerson'];?>
                </td>
            </tr>
            <tr>
                <td width="80" align="center" valign="baseline">攜伴人數 :
                    <?php echo $data ['companion'];?>
                </td>
            </tr>
            <tr>
                <td width="80" align="center" valign="baseline">開始時間 :
                    <?php echo $data['beginTime'];?>
                </td>
            </tr>
            <tr>
                <td width="80" align="center" valign="baseline">結束時間 :
                    <?php echo $data['endTime'];?>
                </td>
            </tr>
            <tr>
                <td width="80" align="center" valign="baseline">參加人數 :
                    <?php echo $data['joinPerson'];?>
                </td>
            </tr>
            <tr>
                <td width="80" align="center" valign="baseline">活動編號 :
                    <?php echo $data['ID'];?>
                </td>
            </tr>
            <tr>
                <td width="80" align="center" valign="baseline">總共參加人數 :</td>

            </tr>
            <tr>
                <td><input type="Number" style ="width: 100%;"name="joincount" id="joincount" min="1" max="<?php $data['companion'];?>" value="" required/>
                </td>
            </tr>
            <tr>
                <td colspan="2" align="center" bgcolor="#CCCCCC">
                    <input type="submit" value="Join" name="joinA" id="joinA" />
                </td>
            </tr>
</body>

</html>