<?php
class ActivityManager{
    public $id ;
    public $url;
    public $server;
    public function __construct(){
        $this->server = new Server();
    }
    public function createActivity($data){
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
        if($result ->execute()){
            $ID= $pdo->lastInsertId();
            $this->id = $ID;
            $this->setURL($ID);
            $this->setJoinTabel($ID,$data['joinEmployee']);
            return true;
        }
        return false;
    }
    public function deleteActivity($data){
            
        
    }
    public function updateActivity($ID,$EID,$totalJoin,$nowJoin){
        
        #更新活動員工參加人數
        $pdo =$this->server->getConnection();
        $sql = "UPDATE  `ActivitySystem`.`ActivityDetail` SET  `isJoin` =  '1',
                `totalJoin` = :totalJoin WHERE `ActivityDetail`.`ID` =:ID; AND `EID` = :EID";
        $result = $pdo->prepare($sql);
        $result -> bindParam(':totalJoin',$totalJoin);
        $result -> bindParam(':ID',$ID,PDO::PARAM_INT);
        $result -> bindParam(':EID',$EID);
        $result->execute();
        #更新活動目前總參加人數
        $sql = "UPDATE  `ActivitySystem`.`ActivityTotal` SET  `joinPerson` =  :joinPerson,
                WHERE  `ActivityTotal`.`ID` = :ID;";
        $result = $pdo->prepare($sql);
        $result -> bindParam(':joinPerson',$nowJoin);
        $result->execute();
        
    }
    public function setJoinTabel($ID,$EID){
        
        #設定參加人數
        $pdo =$this->server->getConnection();
        $sql = "INSERT INTO `ActivitySystem`.`ActivityDetail` (`ActivityNO`, `EID`, `isJoin`, `totalJoin`, `ID`) 
                VALUES (:ID, :EID, '0', '0', NULL);";
                
        $result = $pdo->prepare($sql);
        $result -> bindParam(':ID',$ID,PDO::PARAM_INT);
        foreach($EID as $value){
            $result -> bindParam(':EID',$value);
            $result->execute();
            
        }
    }
    public function getActivity($url){
        $pdo =$this->server->getConnection();
        $sql = "SELECT * FROM  `ActivityTotal` WHERE 
                `url` = :url";
        $result = $pdo->prepare($sql);
        $result -> bindParam(':url',$url);
        echo $url;
        $result->execute();
        $result ->setFetchMode(PDO::FETCH_ASSOC);
        $row = $result->fetch();
        return $row;
    }
    public function getAllActivity(){
        $pdo =$this->server->getConnection();
        $sql = "SELECT * FROM `ActivityTotal`";
        $result = $pdo->prepare($sql);
        $result ->execute();
        $result ->setFetchMode(PDO::FETCH_ASSOC);
        $row =$result->fetchAll();
        return $row;
    }
    
    public function queue($ID,$withPerson){
        $pdo =$this->server->getConnection();
        #新增排程，使用者領取號碼牌
        $sql = "INSERT INTO  `ActivitySystem`.`bakery`(
                `aID`,
                `eID`,
                `numberplate`,
                )VALUES (:aID,:eID,NULL);";
        $result = $pdo->prepare($sql);
        $result -> bindParam(':aID',$ID,PDO::PARAM_INT);
        $result -> bindParam(':eID',"2016080301");
        $result->execute();
        #抓取號碼牌
        $sql = "SELECT `numberplate` FROM `bakery` WHERE `numberplate` <
                (SELECT `numberplate` FROM  `bakery` WHERE 
                `aID` = :aID AND `eID` = :eID)";
        $result = $pdo->prepare($sql);
        $result->execute();
        while($result->fetch());
        #抓取活動是否可以報名
        $sql = "SELECT `limitPerson`,`joinPerson` FROM  `ActivityTotal` WHERE 
                `ID` = :ID";
        $result = $pdo->prepare($sql);
        $result -> bindParam(':ID',$ID,PDO::PARAM_INT);
        $result->execute();
        $ans=$result->fetch(PDO::FETCH_ASSOC);
        if($ans['limitPerson']>$ans['joinPerson']){//報名
            // if($withPerson<$ans['limitPerson']-$ans['joinPerson'])
                
        }else{
            return "報名額滿";
        }
    }
    public function setURL($ID){
        $pdo =$this->server->getConnection();
        $sql = "UPDATE  `ActivitySystem`.`ActivityTotal` SET  `url` =  :url 
                WHERE  `ActivityTotal`.`ID` = :ID";
        $url = md5($ID);
        $result = $pdo->prepare($sql);
        $result -> bindParam(':url',$url);
        $result -> bindParam(':ID',$ID,PDO::PARAM_INT);
        if($result->execute())
        $this->url =  $url;
        return "404notfound";
    }
}
?>