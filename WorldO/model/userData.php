<?php
    include_once "databaseManager.php";
    
    Server::setConnect();
    $a = new personAccount([0,1]);
    $a -> printData();
    $a -> checkAllFriend("shupa0325");
    class personAccount{
        private $userData;
        public function __construct($data){
                foreach($data as $index => $value){
                    $this->userData[$index] = $value;
                }
        }
        public function printData(){
            foreach($this->userData as $index => $value){
                    echo $index.":".$value."<br>";
                }
        }
    }
?>
            <!--、搜尋帳號、新增好友、刪除好友、搜尋好友-->
            <!--public function printMydata($myAccount){-->
            <!--                $sel = 'SELECT * FROM `account` where `pAccount`=' . "'$myAccount'";-->
            <!--                $result = mysqli_query(Server::$worldO,$sel);-->
            <!--                $row = mysqli_fetch_row($result);-->
            <!--                $row = json_encode($row);-->
            <!--                echo $row;-->
            <!--            }-->
            <!--#checkAllFriend($myAccount)用於搜尋$myAccount的好友名單-->
            <!--            public function checkAllFriend($myAccount){-->
            <!--                $searchFriend = 'SELECT `friendAccount` FROM `userFriend` where `userAccount`=' . "'$myAccount'";-->
            <!--                $result = mysqli_query(Server::$worldO,$searchFriend);-->
                            
            <!--                $res;-->
            <!--                while($row = mysqli_fetch_row($result)){-->
            <!--                $res[]=$row[0];-->
            <!--                }-->
            <!--                $res= json_encode($res);-->
            <!--                echo $res;-->
                            
            <!--            }-->
            
            <!-- #searchAccount($email)用於搜尋EMail的好友-->
            <!--public function searchAccount($email){-->
            <!--    $sel = 'SELECT `chineseName` FROM `account` where `email`=' . "'$email'";-->
            <!--    $result = mysqli_query(Server::$worldO,$sel);-->
            <!--    $row = mysqli_fetch_row($result);-->
            <!--    return $row;-->
            <!--}-->
            
            <!--#deleteFriend($myAccount,$friendAccount)刪除好友-->
            <!--public function deleteFriend($myAccount,$friendAccount){-->
            <!--    $sel = "DELETE FROM `worldO`.`userFriend` WHERE `userFriend`.`userAccount` = '$myAccount' AND `userFriend`.`friendAccount` = '$friendAccount'";-->
            <!--    mysqli_query(Server::$worldO,$sel);-->
            <!--    $sel = "DELETE FROM `worldO`.`userFriend` WHERE `userFriend`.`userAccount` = '$friendAccount' AND `userFriend`.`friendAccount` = '$myAccount'";-->
            <!--    mysqli_query(Server::$worldO,$sel);-->
            <!--    if(mysqli_query(Server::$worldO,$sel)){-->
            <!--        echo "success";-->
            <!--    }else{-->
            <!--        echo "failure";-->
            <!--    }-->
            
                
            <!--}-->
            
            <!--#addFriend($myAccount,$friendAccount)新增好友-->
            <!--public function addFriend($myAccount,$friendAccount){-->
            <!--    $sel="select * from `account` where `pAccount` =  '$friendAccount'";-->
            <!--    if(mysqli_query(Server::$worldO,$sel)){-->
                    
            <!--    $sel = "INSERT INTO `worldO`.`userFriend` (`userAccount`, `friendAccount`, `talkRecord`) VALUES ('$myAccount', '$friendAccount', NULL), ('$friendAccount', '$myAccount', NULL);";-->
            <!--    if(mysqli_query(Server::$worldO,$sel)){-->
            <!--        echo "success";-->
            <!--    }else{-->
            <!--        echo "failure";-->
            <!--    }-->
                    
            <!--    }else{-->
            <!--        echo "no person";-->
            <!--    }-->
            
                
            <!--}-->