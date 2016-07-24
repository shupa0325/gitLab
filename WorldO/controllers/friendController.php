<?php
    
    class friendController extends Controller{
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
    }

?>