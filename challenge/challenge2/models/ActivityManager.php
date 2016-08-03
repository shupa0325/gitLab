<?php
class ActivityManager{
    var $id ;
    var $server;
    var $pdo;
    function __construct(){
        $this->server = new Server();
    }
    function createActivity($data){
        $pdo =$this->server->getConnection();
        $sql = "INSERT INTO  `ActivitySystem`.`ActivityTotal`(
                `Aname`,
                `limitPerson`,
                `companion`,
                `beginTime`,
                `endTime`,
                `joinPerson`,
                `ID`,
                `isOperating`
                )VALUES (:activityName,:maxperson,:companion,:beginTime,:endTime,'0', NULL ,'0');";
        $result = $pdo->prepare($sql);
        $result -> bindParam(':activityName',$data['activityName']);
        $result -> bindParam(':maxperson',$data['maxperson']);
        $result -> bindParam(':companion',$data['companion']);
        $result -> bindParam(':beginTime',$data['beginTime']);
        $result -> bindParam(':endTime',$data['endTime']);
       // $this -> setID($data['activityName'],$data['beginTime']);
        return $result ->execute();
    }
    function deleteActivity($data){
            
        
    }
    function updateActivity($data){
        
        
    }
    function getActivity(){
        $pdo =$this->server->getConnection();
        $sql = "SELECT * FROM `ActivityTotal`";
        $result = $pdo->prepare($sql);
        $result ->execute();
        $result ->setFetchMode(PDO::FETCH_ASSOC);
        $row =$result->fetchAll();
        return $row;
    }
    // function setID($name,$begintime){
    //     $pdo =$this->server->getConnection();
    //     $sql = "SELECT  `isOperating` FROM  `ActivityTotal` WHERE 
    //             Aname =  ':name' AND 
    //             beginTime =  ':beginTime'
    //             LIMIT 0 , 1";
    //     $result = $pdo->prepare($sql);
    //     $result -> bindParam(':name',$name);
    //     $result -> bindParam(':beginTime',$begintime);
    //     if ($result->execute()){
    //         $row = $result->fetch();
    //         print_r($row);
    //     	if(!empty($row))
    //     	{
    //     	    $this->id = $row[0];
    //     	}
    //     }
    // }
    // function getURL(){
    //     return "{$this->id}";
    // }
}
?>