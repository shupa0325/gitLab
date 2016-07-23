<?php session_start();
header("Content-Type:text/html; charset=utf-8");
require_once "Server.php";
    
    #管理資料庫設定，檢查帳號重複性、創建帳號 
    class databaseManager {
        public function __construct() {
            Server::setConnect();
            
        }
        #前端jquery檢查創建帳號合理性的窗口 
        public function ajaxCheck($userAccount) {
            $result=$this->checkAccount($userAccount);
            switch($result) {
                case "0": 
                    echo"$userAccount僅可為數字及英文字母還有底線";
                    break;
                case "1": 
                    echo "帳號長度至少要八個字元";
                    break;
                case "2": 
                    echo "此帳號已經有人使用";
                    break;
                case "3": 
                    echo "此帳號可以使用";
                    break;
                default: echo "error in ajaxCheck";
            }
        }
        
        #前端jquery檢查使用者帳密是否正確 
        public function ajaxPwd($userName, $userPwd) {
            $result=$this->loginAccount($userName, $userPwd);
            switch($result) {
                case "0": 
                    echo"無此帳號唷";
                    break;
                case "1": 
                    echo "帳號密碼不可為空白";
                    break;
                case "2": 
                    echo "密碼錯誤";
                    break;
                case "3":
                    $_SESSION['userName']=$userName;
                    $result=["歡迎你的回來~! {$userName}",
                    "true"];
                    echo json_encode($result);
                    break;
                default: echo "error in ajaxPwd";
            }
        }
        
        #checkAccount($userAccount)用於檢查帳號格式正確性與是否重複 
        public function checkAccount($userAccount) {
            if(!preg_match("/^[A-Za-z_][A-Za-z0-9_]{8,15}$/", $userAccount)) {
                return 0; //echo "$userAccount僅可為數字及英文字母還有底線"; 
            }
            else if(strlen($userAccount) <8) {
                return 1;
                /* "帳號長度至少要八個字元" */
            }
            else {
                $sel='SELECT `pAccount` FROM `account` where `pAccount`=' . "'$userAccount'";
                $result=mysqli_query(Server:: $worldO, $sel);
                if($row=mysqli_fetch_assoc($result)) {
                    return 2;
                    /*"此帳號已經有人使用";*/
                }
                else {
                    return 3;
                }
            }
            return "error";
        }
        
        #createAccount($userData)用於創建帳戶 
        public function createAccount($userData) {
            #創辦前帳號檢查 
            if($this->checkAccount($userData['pAccount'])==3) {
                #創辦前密碼檢查 
                if(!(preg_match("/^[A-Za-z][A-Za-z0-9]{7,15}$/", $userData['pPassword']) ||(strlen($userData['pPassword']) <8))) {
                    echo $userData['pPassword'];
                    return false;
                }
                else {
                    $insertAccount='INSERT INTO `worldO`.`account` (`pAccount`, `pPassword`, `chineseName`, `englishName`, `birthday`, `email`, `phoneNumber`, `address`)' ."VALUES ('{$userData['pAccount']}','{$userData['pPassword']}','{$userData['chineseName']}','{$userData['englishName']}','{$userData['birthday']}','{$userData['email']}','{$userData['phoneNumber']}','{$userData['address']}')";
                    $result=mysqli_query(Server:: $worldO, $insertAccount);
                    return $result;
                }
            }
            else {
                return false;
            }
        }
        
        #loginAccount($userName, $userPwd)用於檢查登入
        public function loginAccount($userName, $userPwd) {
            $sel='SELECT `pPassword` FROM `account` where `pAccount`=' . "'$userName'";
            $result=mysqli_query(Server::$worldO, $sel);
            if(!$userName | !$userPwd) {
                return 1;//echo "帳號密碼不可為空白";
            }
            else if($row=mysqli_fetch_row($result)) {
                if( $row[0]==$userPwd) {
                    
                    return 3;
                }
                else {
                    return 2;//echo "密碼錯誤";
                }
            }
            else {
                return 0;//echo "查無此帳號";
            }
            
        }
        
        #關閉MYSQL窗口
        public function close() {
            mysqli_close(Server:: $worldO);
        }
    }

?>