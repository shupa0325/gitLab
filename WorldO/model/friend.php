<?php

    class friend{

      public function __construct(){
            Server::setConnect();
        }
        
        
        #======================================================================#
        #getFriendList() 回傳帳戶的好友名單                       #
        #======================================================================#
        
      public function getFriendList(){
            $sql = "SELECT `friendAccount` FROM `userFriend`
            WHERE `userAccount` = '{$_SESSION['username']}' AND isfriend = true ";
            $result = mysqli_query(Server::$worldO,$sql);
            $res;
            while($row = mysqli_fetch_row($result)){
            $res[]=$row[0];
            }
            $this->friend = $res;
            $res= json_encode($res);
            return $res;
        }
         
        #======================================================================#
        #getFriendInvite()獲取帳戶好友邀請資訊                     #
        #======================================================================#
        
      public function getFriendInvite(){
            $sql="SELECT `friendAccount` FROM `userFriend` WHERE `userAccount` =  '{$_SESSION['username']}' AND `isfriend` = 0";
            $result = mysqli_query(Server::$worldO,$sql);
            $res;
            while($row = mysqli_fetch_row($result)){
            $res[]=$row[0];
            }
            $this->invite = $res;
            $res= json_encode($res);
            return $res;
            
        }
        
        
        #======================================================================#
        #addFriend({$_SESSION['username']}$friendAccount) 新增好友                         #
        #======================================================================#
        
        public function addFriend($friendAccount){
            $sql="SELECT `pAccount` FROM `account` WHERE `pAccount` =  '$friendAccount'";
            $result = mysqli_query(Server::$worldO,$sql);
            
            if(mysqli_fetch_row($result)){
                    
                $sql = "INSERT INTO `worldO`.`userFriend` (`userAccount`, `friendAccount`, `talkRecord`, `isfriend`) VALUES ('{$_SESSION['username']}', '$friendAccount', NULL,1), ('$friendAccount', '{$_SESSION['username']}', NULL,0);";
                if(mysqli_query(Server::$worldO,$sql)){
                    return "success";
                }else{
                    return "failure";
                }
                }else{
                    return "no person";
                }
        }
        
        #======================================================================#
        #acceptInvite($friendAccount) 接受好友邀請                  #
        #======================================================================#
            
      public function acceptInvite($friendAccount){
             $sql="UPDATE  `worldO`.`userFriend` SET  `isfriend` =  '1' WHERE  `userFriend`.`userAccount` =  '{$_SESSION['username']}' AND  `userFriend`.`friendAccount` =  '$friendAccount';";
             if(mysqli_query(Server::$worldO,$sql))
                return "success";
                return "failure";
            
            
        }
        
        
        #======================================================================#
        #deleteFriend($friendAccount)刪除好友                       #
        #======================================================================#
        
      public function deleteFriend($friendAccount){
                $sel = "DELETE FROM `worldO`.`userFriend` WHERE `userFriend`.`userAccount` = '{$_SESSION['username']}' AND `userFriend`.`friendAccount` = '$friendAccount'";
                mysqli_query(Server::$worldO,$sel);
                $sel = "DELETE FROM `worldO`.`userFriend` WHERE `userFriend`.`userAccount` = '$friendAccount' AND `userFriend`.`friendAccount` = '{$_SESSION['username']}'";
                mysqli_query(Server::$worldO,$sel);
                if(mysqli_query(Server::$worldO,$sel)){
                    return "success";
                }else{
                    return "failure";
                }
             
        }
            
    }

?>