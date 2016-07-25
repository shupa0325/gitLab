<?php
class Article{
    
        function __construct(){
            Server::setConnect();
        }
        
        #======================================================================#
        #newArticle($userAccount,$article) 新增文章                            #
        #======================================================================#
        
        function newArticle($userAccount,$article){
            $sql ="INSERT INTO `worldO`.`article` (`ID`, `userName`, `articleName`, `competence`, `content`, `message`, `issuetime`) 
            VALUES (NULL, '$userAccount', '{$article['articletitle']}', NULL, ' {$article['articlecontent']}', '', CURRENT_TIMESTAMP)";
            return mysqli_query(Server::$worldO,$sql);
            
        }
        
        #======================================================================#
        #loadArticle($userAccount) 讀取所有認識帳戶包含自己的文章              #
        #======================================================================#
        
        function loadArticle($userAccount){
            
        $sql = "SELECT `userName`,`issuetime`,`articleName`,`content`,`ID` FROM `article` where `userName` like '$userAccount' or `userName` in (SELECT  `friendAccount` 
                FROM  `userFriend` 
                WHERE  `userAccount` =  '$userAccount') ORDER BY  `article`.`issuetime` DESC  limit 6";
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

        #======================================================================#
        #loadmyArticle($userAccount) 讀取所有我的文章                          #
        #======================================================================#
                
        function loadmyArticle($userAccount){
            
        $sql = "SELECT `userName`,`issuetime`,`articleName`,`content`,`ID` FROM `article` where `userName` like '$userAccount' ORDER BY  `article`.`issuetime` DESC  limit 6";
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
        
        #======================================================================#
        #updateArticle() 更新文章資料                                          #
        #======================================================================#
        
        function updateArticle($articleName,$content,$username,$id){
            $sql ="UPDATE `worldO`.`article` SET `articleName` = '$articleName', `content` = '$content' WHERE `article`.`ID` = $id  and `userName` = '$username'";
            return mysqli_query(Server::$worldO,$sql);
            
        }
        
        #======================================================================#
        #deleteArticle() 刪除文章                                              #
        #======================================================================#
        
        function deleteArticle($username,$id){
            $sql = "DELETE FROM `worldO`.`article` WHERE `article`.`ID` = $id and `userName` = '$username'";
            return mysqli_query(Server::$worldO,$sql);
            
        }
        
        #======================================================================#
        #updateMessage() 新增留言                                              #
        #======================================================================#
        
        function updateMessage(){
            
        }
        
        #======================================================================#
        #loadMessage() 讀取所有留言                                            #
        #======================================================================#
        
        function loadMessage(){
            
        }
        
}
?>