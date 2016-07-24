<?php
class Article{
    
        function __construct(){
            require_once "Server.php";
            Server::setConnect();
        }
        
        function newArticle($userAccount,$article){
            $sql ="INSERT INTO `worldO`.`article` (`ID`, `userName`, `articleName`, `competence`, `content`, `message`, `issuetime`) 
            VALUES (NULL, '$userAccount', '{$article['articletitle']}', NULL, ' {$article['articlecontent']}', '', CURRENT_TIMESTAMP)";
            return mysqli_query(Server::$worldO,$sql);
            
        }
        
        function loadArticle($userAccount){
            
        $sql = "SELECT `userName`,`issuetime`,`articleName`,`content` FROM `article` where `userName` like '$userAccount' or `userName` in (SELECT  `friendAccount` 
                FROM  `userFriend` 
                WHERE  `userAccount` =  '$userAccount')";
        $result = mysqli_query(Server::$worldO,$sql);//所有相關文章資料
        $res;
        $i=0;
        while($row = mysqli_fetch_row($result)){
            
            foreach($row as $value)
            {   
                $res[$i][] = $value;
            }
            $i++;
        }
            $res= json_encode($res);
            return $res;
        }
        
        function updateArticle(){
            
        }
        
        function deleteArticle(){
            
        }
        
}
?>