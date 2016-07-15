<?php
        header("Content-Type:text/html; charset=utf-8");
        
        #server負責進行資料庫連接，將連接資料建給靜態變數$worldO
        class Server{
            public static $worldO ;
            public static function setConnect(){
                $worldO = mysqli_connect("localhost", "guest", "guest", "worldO");
                    
                if (mysqli_connect_errno()) {
                	printf("連接失敗： %s\n", mysqli_connect_error());
                 	exit();
                }
                
                mysqli_set_charset($worldO,"utf8");
                Server::$worldO = $worldO;
            }
        }
        
       
        #管理資料庫設定，檢查帳號重複性、創建帳號、搜尋帳號、新增好友、刪除好友、搜尋好友
        class databaseManager{
            public function __construct(){
                Server::setConnect();
            }
            public function loginAccount($userName,$userPwd){
                $sel = 'SELECT `pPassword` FROM `account` where `pAccount`=' . "'$userName'";
                $result = mysqli_query(Server::$worldO,$sel);
                
                if(!$userName | !$userPwd){
                    echo "帳號密碼不可為空白";
                }
                else if($row = mysqli_fetch_row($result)){
                    if( $row[0] == $userPwd)
                    {
                        setcookie("account",$userName);
                        // setcookie("password",$userPwd);
                        $result = ["歡迎你的回來~! {$userName}","true"];
                        echo   json_encode($result);
                        
                    }
                    else{
                        echo "密碼錯誤";
                        }
                }   
                else{
                    echo "查無此帳號"; 
                }
            
            }
            #checkAccount($userAccount)用於檢查帳號格式正確性與是否重複
            public function checkAccount($userAccount){
                
                if(!preg_match("/^([0-9A-Za-z_]+)$/",$userAccount))
                { echo "僅可為數字及英文字母還有底線"; }
                else if(strlen($userAccount) <8 )
                { echo "帳號長度至少要八個字元"; }
                else{
                $sel = 'SELECT `pAccount` FROM `account` where `pAccount`=' . "'$userAccount'";
                $result = mysqli_query(Server::$worldO,$sel);
                if($row =  mysqli_fetch_assoc($result))
                    {echo "此帳號已經有人使用";}
                else 
                   { echo "此帳號無人使用";}
                }
                                    
            }
            
            public function printMydata($myAccount){
                $sel = 'SELECT * FROM `account` where `pAccount`=' . "'$myAccount'";
                $result = mysqli_query(Server::$worldO,$sel);
                $row = mysqli_fetch_row($result);
                $row = json_encode($row);
                echo $row;
            }
            #createAccount($userData)用於創建帳戶
            public function createAccount($userData){
                $insertAccount = 'INSERT INTO `worldO`.`account` (`pAccount`, `pPassword`, `chineseName`, `englishName`, `birthday`, `email`, `phoneNumber`, `address`)'
                     ."VALUES ('{$userData['pAccount']}','{$userData['pPassword']}','{$userData['chineseName']}','{$userData['englishName']}','{$userData['birthday']}','{$userData['email']}','{$userData['phoneNumber']}','{$userData['address']}')";

                $result = mysqli_query(Server::$worldO,$insertAccount);
                if($result)
                    echo "成功";
                else
                    echo "失敗";
            }
            
            #checkAllFriend($myAccount)用於搜尋$myAccount的好友名單
            public function checkAllFriend($myAccount){
                $searchFriend = 'SELECT `friendAccount` FROM `userFriend` where `userAccount`=' . "'$myAccount'";
                $result = mysqli_query(Server::$worldO,$searchFriend);
                
                $res;
                while($row = mysqli_fetch_row($result)){
                $res[]=$row[0];
                }
                $res= json_encode($res);
                echo $res;
                
            }
            
             #searchAccount($email)用於搜尋EMail的好友
            public function searchAccount($email){
                $sel = 'SELECT `chineseName` FROM `account` where `email`=' . "'$email'";
                $result = mysqli_query(Server::$worldO,$sel);
                $row = mysqli_fetch_row($result);
                return $row;
            }
            
            #updateMyFriend($myAccount)新增好友或者刪除好友
            public function deleteFriend($myAccount,$friendAccount){
                $sel = "DELETE FROM `worldO`.`userFriend` WHERE `userFriend`.`userAccount` = '$myAccount' AND `userFriend`.`friendAccount` = '$friendAccount'";
                mysqli_query(Server::$worldO,$sel);
                $sel = "DELETE FROM `worldO`.`userFriend` WHERE `userFriend`.`userAccount` = '$friendAccount' AND `userFriend`.`friendAccount` = '$myAccount'";
                mysqli_query(Server::$worldO,$sel);
                if(mysqli_query(Server::$worldO,$sel)){
                    echo "success";
                }else{
                    echo "failure";
                }
            
                
            }
            
            
            
        }

?>