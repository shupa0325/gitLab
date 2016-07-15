
<?php
    require_once "../model/database.php";
    $check = new databaseManager();
    switch($_POST["flag"])
    {
        case "personData":
                $check ->printMydata($_POST["userName"]);
                break;
        case "friendTable":
                $check ->checkAllFriend($_POST["userName"]);
                break;
        default:
            echo "no cmd";
    }
?>