<?php
    include_once "databaseManager.php";
    session_start();
    class userData{
        
        private $userData;
        public function __construct(){
                Server::setConnect();
                $_SESSION['username'];
                $_SESSION['password'];
                $_SESSION['chinesename'];
                $_SESSION['englishname'];
                $_SESSION['birthday'];
                $_SESSION['email'];
                $_SESSION['phonenumber'];
                $_SESSION['address'];
                $_SESSION['article'];
                $_SESSION['friend'];
                
        }
        
        public function printData(){
            foreach($this->userData as $index => $value){
                    echo $index.":".$value."<br>";
                }
        }
        #checkAllFriend($myAccount)用於搜尋$myAccount的好友名單
        public function checkAllFriend($myAccount){
            $searchFriend = 'SELECT `friendAccount` FROM `userFriend` where `userAccount`=' . "'{$_SESSION['username']}'";
            $result = mysqli_query(Server::$worldO,$searchFriend);
            $res;
            while($row = mysqli_fetch_row($result)){
            $res[]=$row[0];
            }
            $res= json_encode($res);
            echo $res;
        }
    }
    //  、搜尋帳號、新增好友、刪除好友、搜尋好友
    //         public function printMydata($myAccount){
    //                         $sel = 'SELECT * FROM `account` where `pAccount`=' . "'$myAccount'";
    //                         $result = mysqli_query(Server::$worldO,$sel);
    //                         $row = mysqli_fetch_row($result);
    //                         $row = json_encode($row);
    //                         echo $row;
    //                     }
            
            
    //          #searchAccount($email)用於搜尋EMail的好友
    //         public function searchAccount($email){
    //             $sel = 'SELECT `chineseName` FROM `account` where `email`=' . "'$email'";
    //             $result = mysqli_query(Server::$worldO,$sel);
    //             $row = mysqli_fetch_row($result);
    //             return $row;
    //         }
            
    //         #deleteFriend($myAccount,$friendAccount)刪除好友
    //         public function deleteFriend($myAccount,$friendAccount){
    //             $sel = "DELETE FROM `worldO`.`userFriend` WHERE `userFriend`.`userAccount` = '$myAccount' AND `userFriend`.`friendAccount` = '$friendAccount'";
    //             mysqli_query(Server::$worldO,$sel);
    //             $sel = "DELETE FROM `worldO`.`userFriend` WHERE `userFriend`.`userAccount` = '$friendAccount' AND `userFriend`.`friendAccount` = '$myAccount'";
    //             mysqli_query(Server::$worldO,$sel);
    //             if(mysqli_query(Server::$worldO,$sel)){
    //                 echo "success";
    //             }else{
    //                 echo "failure";
    //             }
            
                
    //         }
    
                
    //         }
?>
           