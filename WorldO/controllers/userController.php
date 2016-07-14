<?php
    require_once "../model/database.php";
    $check = new databaseManager();
    switch($_POST["flag"])
    {
        case "":
                $check ->checkAccount($_POST["userName"]);
                break;
        default:
            echo "no cmd";
    }
?>
