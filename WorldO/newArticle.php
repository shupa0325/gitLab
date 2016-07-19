<?php
    include_once "model/database.php";
    Server::setConnect();
    $userName = "shupa_tsai0325";
    $content = $_POST["articlecontent"];
    $competence = "NULL";
    $title = $_POST["articletitle"];
    $sql="INSERT INTO `worldO`.`article` (`ID`, `userName`, `articleName`, `competence`, `content`, `message`, `issuetime`) VALUES 
    (NULL, '$userName','$title', $competence, '$content','', CURRENT_TIMESTAMP)";
    
    if(mysqli_query(Server::$worldO,$sql))
                    echo "成功";
    else
                    echo $sql;
     echo"<script>history.go(-1);</script>";  

?>
