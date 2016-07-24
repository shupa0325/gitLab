<?php

    class userData{
        
                
        #======================================================================#
        #建構子重新設定SESSION資料                                             #
        #======================================================================#
            
        public function __construct($userName){
            Server::setConnect();
            $sql = "SELECT * FROM `account` where `pAccount` = '$userName'";
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
`address` =  '{$userData['address']}' WHERE  `account`.`pAccount` =  'shupa0325' AND  `account`.`email` =  'fir325ss@yahoo.com.tw';";
            return mysqli_query(Server:: $worldO, $sql);
        }
    }
?>
           