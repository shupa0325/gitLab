<?php
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
        
       
        
        class checkMethod{
            public function __construct(){
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
        }

?>