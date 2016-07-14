<?php
    require_once "../model/database.php";
    $check = new databaseManager();
    switch($_POST["flag"])
    {
        case "checkAcc":
                        $check ->checkAccount($_POST["userName"]);
                        break;
        case "login":
                        $check ->loginAccount($_POST["userName"],$_POST["userPwd"]);
                        break;
        case "create":
                        $check ->createAccount($_POST);
                        break;
        default:
            echo "no cmd";
    }
?>
