<?php

    class friend{
        public $id;
        public $invite;
        public $friend;
        public $status;
        public $datetime;
     
        function __construct(){
            require_once "Server.php";
            Server::setConnect();
        }
        
        function getFriendList($loginAccount){
            $sql = "SELECT `friendAccount` FROM `userFriend`
            where `userAccount` = '{$loginAccount}' and isfriend = true ";
            $result = mysqli_query(Server::$worldO,$sql);
            $res;
            while($row = mysqli_fetch_row($result)){
            $res[]=$row[0];
            }
            $this->friend = $res;
            $res= json_encode($res);
            return $res;
        }
         
        function getFriendStatus($inviteAccount, $playerAccount){
             
        }
        
        function getFriendInvite($userAccount){
            $sql="select `friendAccount` from `userFriend` where `userAccount` =  '$userAccount' and `isfriend` = 0";
            $result = mysqli_query(Server::$worldO,$sql);
            $res;
            while($row = mysqli_fetch_row($result)){
            $res[]=$row[0];
            }
            $this->invite = $res;
            $res= json_encode($res);
            return $res;
            
        }
         
        function getWhoInviteMe($playerAccount){
            
        }
         
                
        #addFriend($myAccount,$friendAccount)新增好友
        public function addFriend($myAccount,$friendAccount){
            $sql="select `pAccount` from `account` where `pAccount` =  '$friendAccount'";
            $result = mysqli_query(Server::$worldO,$sql);
            
            if(mysqli_fetch_row($result)){
                    
                $sql = "INSERT INTO `worldO`.`userFriend` (`userAccount`, `friendAccount`, `talkRecord`, `isfriend`) VALUES ('$myAccount', '$friendAccount', NULL,1), ('$friendAccount', '$myAccount', NULL,0);";
                if(mysqli_query(Server::$worldO,$sql)){
                    echo "success";
                }else{
                    echo "failure";
                }
                }else{
                    echo "no person";
                }
        }
            
         
        function acceptInvite($inviteAccount, $playerAccount, $updatetime){
             
        }
         
        function deleteFriend($inviteAccount, $playerAccount){
            
        }
        
    }

?>