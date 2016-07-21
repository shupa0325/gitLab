<?php
        include_once "databaseManager.php";
        Server::setConnect();
        $article;
        
        $sql = "SELECT `userName`,`issuetime`,`articleName`,`content` FROM `article` where `userName` like 'shupa_tsai0325' or `userName` in (SELECT  `friendAccount` 
                FROM  `userFriend` 
                WHERE  `userAccount` =  'shupa_tsai0325')";
        $result = mysqli_query(Server::$worldO,$sql);
        $res;
        $i=0;
        while($row = mysqli_fetch_row($result)){
            
            foreach($row as $value)
            {   
                $res[$i][] = $value;
            }
            $i++;
        }
        // $res= json_encode($res);
        // echo $res;

?>