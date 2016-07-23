<?php
    session_start();
    class dataController extends Controller{
        
        public function logoutAccount(){
            session_destroy();
            header("location:/WorldO/");
        }
        public function displayFriend(){
            $friendTable = $this->model("friend");
            echo $friendTable ->getFriendList($_SESSION['username']);
        }
        
        public function invitedfriend(){
            $friend = $this->model("friend");
            echo $friend ->getFriendInvite($_SESSION['username']); 
        }
        
        public function addfriend(){
            $friend = $this->model("friend");
            $friend = $friend->addFriend($_SESSION['username'],$_POST['friend']);
        }
        public function acceptfriend(){
            $friend = $this->model("friend");
            echo $friend -> acceptInvite($_SESSION['username'],$_POST['friend']);
        }
        public function refusefriend(){
            $friend = $this->model("friend");
            $friend -> deleteFriend($_SESSION['username'],$_POST['friend']);
        
        }
        // public function
        // public function
    }
// require_once "../model/database.php";
//     $check = new databaseManager();
//     switch($_POST["flag"])
//     {
//         case "personData":
//                 $check ->printMydata($_POST["userName"]);
//                 break;
//         case "friendTable":
//                 $check ->checkAllFriend($_POST["userName"]);
//                 break;
//         case "addFriend":
//                 $check ->addFriend($_POST["userName"],$_POST['friend']);
//                 break;
//         case "deleteFriend":
//                 $check ->deleteFriend($_POST["userName"],$_POST['friend']);
//                 break;
//         default:
//             echo "no cmd";
//     }
?>
 