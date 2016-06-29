<!DOCTYPE html>

<?php
        $user = ['Shupa' =>'shupa_tsai','Leona' => 'leona_tsou','Eric' => 'eric_lee'] ;
        if($_POST['sub']){
            if(!$_POST['account'] | $_POST["password"]){
                echo "帳號密碼不可為空白";
            }
            else if($user[$_POST['account']] !=null){
                if( $user[$_POST['account']] == $_POST["password"])
                {
                    setcookie("account",$_POST["account"]);
                    echo    "歡迎你的回來 {$_POST['account']}";
                    header("refresh:2 ,userpass.php");
                }
                else {
                    echo "密碼錯誤";
                }
            }   
            else {
                echo "查無此帳號"; 
            }
        }
        if($_POST['sub2']){
            if (!isset($_COOKIE["account"]))
             {
                 
             	echo  "尚未登入過";
             }
            else {
                echo    "歡迎你的回來 {$_COOKIE['account']}";
                header("refresh:2 ,userpass.php");
            }
        }
?>
    <html>

    <head>
        <meta charset="UTF-8">
        <title>"表單練習"</title>
    </head>

    <body>

        <form method="post">
            <table width="300" border="0" align="center" cellpadding="5" cellspacing="0" bgcolor="#F2F2F2">
                <tr>
                    <td colspan="2" align="center" bgcolor="#CCCCCC">
                        <font color="#FFFFFF">會員系統 - 登入</font>
                    </td>
                </tr>
                <tr>
                    <td width="80" align="center" valign="baseline">帳號</td>
                    <td valign="baseline">
                        <input type="text" name="account" />
                </tr>
                <tr>
                    <td width="80" align="center" valign="baseline">密碼</td>
                    <td valign="baseline">
                        <input type="password" name="password" />
                </tr>
                <tr>
                    <td colspan="2" align="center" bgcolor="#CCCCCC">
                        <input type="submit" value="send" name="sub" />
                        <input type="reset" value="clear" name="res" />
                        <input type="submit" value="member" name="sub2" />
                    </td>
                </tr>
        </form>

    </body>

    </html>