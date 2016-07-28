<?php
    
    class friendController extends Controller{
        #======================================================================#
        #displayFriend() 輸出好友名單                                          #
        #======================================================================#
        public function displayFriend(){
            $friendTable = $this->model("friend");
            $this ->view("ajaxReturn",$friendTable ->getFriendList($_SESSION['username']));
        }
        
        #======================================================================#
        #invitedfriend() 輸出是否有好友邀請名單                                #
        #======================================================================#
        
        public function invitedfriend(){
            $friend = $this->model("friend");
            $this ->view("ajaxReturn",$friend ->getFriendInvite($_SESSION['username'])); 
        }
        
        #======================================================================#
        #addfriend() 新增好友                                                  #
        #======================================================================#
        
        public function addfriend(){
            $friend = $this->model("friend");
            $friend = $friend->addFriend($_SESSION['username'],$_POST['friend']);
        }
        
        #======================================================================#
        #acceptfriend() 接受好友邀請                                           #
        #======================================================================#
        public function acceptfriend(){
            $friend = $this->model("friend");
            $this ->view("ajaxReturn",$friend -> acceptInvite($_SESSION['username'],$_POST['friend']));
        }
        
        #======================================================================#
        #refusefriend() 刪除好友還有好友邀請                                   #
        #======================================================================#
        public function refusefriend(){
            $friend = $this->model("friend");
            $friend -> deleteFriend($_SESSION['username'],$_POST['friend']);
        
        }
    }

?>