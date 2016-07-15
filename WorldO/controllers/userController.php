
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
        case "deleteFriend":
                $check ->deleteFriend($_POST["userName"],$_POST['friend']);
                break;
        default:
            echo "no cmd";
    }
?>