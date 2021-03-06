<?php

    class userData{
        
                
        #======================================================================#
        #建構子重新設定SESSION資料                                             #
        #======================================================================#
            
        public function __construct(){
            Server::setConnect();
            $sql = "SELECT * FROM `account` WHERE `pAccount` = '{$_SESSION['username']}'";
            $result=mysqli_query(Server:: $worldO, $sql);
            $row = mysqli_fetch_assoc($result);
            foreach ($row as $key => $value) {
                 $_SESSION[$key] = $value;
             }
        }
        
                
        #======================================================================#
        #changeData($userData) 更新帳戶個人資料                                #
        #======================================================================#
            
        public function changeData($userData){
            $sql = "UPDATE  `worldO`.`account` SET  `pPassword` =  '{$userData['newPassword']}',
`englishName` =  '{$userData['englishName']}',
`phoneNumber` =  '{$userData['phoneNumber']}',
`address` =  '{$userData['address']}' WHERE  `account`.`pAccount` =  '{$_SESSION['username']}' AND  `account`.`email` =  '{$_SESSION['email']}';";
            return mysqli_query(Server:: $worldO, $sql);
        }
        
        #======================================================================#
        #isMessage() 確認是否有未讀訊息，並且回傳具有訊息的帳號陣列            #
        #======================================================================#
        
        public function isMessage(){
            $sql = "SELECT `friendAccount` FROM `userFriend`
WHERE `userAccount` LIKE '{$_SESSION['username']}' AND `readmessage` = 'F'";
            $result =  mysqli_query(Server:: $worldO, $sql);
            while($row = mysqli_fetch_array($result)){
                    $friend []=$row[0];
                
            }
             $res= json_encode($friend);
            return $res;
        }
        #======================================================================#
        #getMessage() 獲取訊息內容，並且回傳陣列                               #
        #======================================================================#
        
        public function getMessage($friend){
            $sql="SELECT `talkRecord` FROM `userFriend`
WHERE `userAccount` LIKE '{$_SESSION['username']}' AND `friendAccount` LIKE '$friend'";
            $result = mysqli_query(Server:: $worldO, $sql);
            $message = mysqli_fetch_array($result);
            return $message[0];
        }
        
        #======================================================================#
        #sendMessage() 傳送訊息給好友，並回傳是否成功                          #
        #======================================================================#
        
        public function sendMessage($friend,$message){
            $sql = "UPDATE  `worldO`.`userFriend` SET  `talkRecord` = concat(userFriend.talkRecord,'{$_SESSION['username']} : $message') 
            WHERE `userFriend`.`userAccount` =  '$friend' AND  `userFriend`.`friendAccount` =  '{$_SESSION['username']}'";
            $b = mysqli_query(Server:: $worldO, $sql);
            $this->setRead($friend,'F');
            $sql = "UPDATE  `worldO`.`userFriend` SET  `talkRecord` = concat(userFriend.talkRecord,'{$_SESSION['username']} : $message') 
            WHERE `userFriend`.`userAccount` =  '{$_SESSION['username']}' AND  `userFriend`.`friendAccount` =  '$friend'";
            $b = mysqli_query(Server:: $worldO, $sql);
            return $b;
        }
        #======================================================================#
        #setRead() 設定訊息為未讀取F/已讀取T                                   #
        #======================================================================#
        
        public function setRead($friend,$flag){
            $sql = "UPDATE  `worldO`.`userFriend` SET  `readmessage` =  '$flag' 
            WHERE  `userFriend`.`userAccount` =  '$friend' AND `userFriend`.`friendAccount` =  '{$_SESSION['username']}'";
            return mysqli_query(Server:: $worldO, $sql);
        }
        
    }
?>
           