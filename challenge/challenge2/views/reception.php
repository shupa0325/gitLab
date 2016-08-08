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
    <?php if(isset($_SESSION['EID'])){?>
    <div class="blackboard">
        <form>
            <table border='1px' style='text-align:center'>
                <tr>
                    <td>活動名稱</td>
                    <td>參加人數限制</td>
                    <td>可攜伴數</td>
                    <td>開始時間</td>
                    <td>結束時間</td>
                    <td>目前參加人數</td>
                    <td>活動編號</td>
                    <td>活動狀態</td>
                    <td>連結網址</td>

                </tr>
                <?php foreach($data as $value){
                    echo '<tr>';
                    foreach ($value as $key => $val){    
                        echo '<td>';
                        echo "$val";
                        echo '</td>';
                        if($key == 'ID')
                        $id = $val;
                        
                    }; 
                    echo "<td><a href='/challenge2/reception/checkActivity/$id'>點我進入</a></td>";
                    echo "<br>";
                    echo '</tr>';
                }; ?>
            </table>
        </form>
        <?php }else{?>
        <form class="form-login" method="post" action="/challenge2/reception/loginAccount/">
            <table width="300" border="0" align="center" cellpadding="5" cellspacing="0" bgcolor="#F2F2F2">
                <tr>
                    <td colspan="2" align="center" bgcolor="#CCCCCC">
                        <font color="#FFFFFF">請輸入員工編號</font>
                    </td>
                </tr>
                <tr>
                    <td width="80" align="center" valign="baseline">員工編號</td>
                    <td valign="baseline">
                        <input type="text" onkeypress='return event.charCode >= 48 && event.charCode <= 57' name="EID" id="EID" maxlength="10" value="" required/>
                </tr>
                <tr>
                    <td width="80" align="center" valign="baseline">員工密碼</td>
                    <td valign="baseline">
                        <input type="password" name="password" id="password" maxlength="20" value="ssssssss" required/>
                </tr>
                <tr>
                    <td colspan="2" align="center" bgcolor="#CCCCCC">
                        <input type="submit" value="登入" name="loginAccount"  />
                    </td>
                </tr>
            </table>
        </form>

        <?php } ?>
</body>

</html>