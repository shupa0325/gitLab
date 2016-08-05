<?php
class employeeManager{
    var $server;
    function __construct(){
        $this->server = new Server();
    }
    #======================================================================#
    #createEmployee($user)    創建員工資料                                 #
    #======================================================================#
    function createEmployee($user){
        $pdo =$this->server->getConnection();
        $sql = "INSERT INTO `ActivitySystem`.`employee` (`EID`, `ID`, `Name`, `department`, `password`, `isStart`, `manager`) 
        VALUES ('', NULL, :name,:department, 'ssssssss', '0', '0')";
        $result = $pdo->prepare($sql);
        $result -> bindParam(':name',$user['name']);
        $result -> bindParam(':department',$user['department']);
        $result->execute();
        #獲得此筆員工資料ID
        $ID= $pdo->lastInsertId();
        $IDs %= $ID;
        #製作員工編號
        $date = date("Y-m-d");
        $IDs = ($ID<10)?"0".$ID:$ID;
        $EID = str_replace("-","",$date).$IDs;
        #更新員工編號
        $sql ="UPDATE  `ActivitySystem`.`employee` SET  `EID` =  :EID 
        WHERE  `employee`.`ID` = :ID;";
        $result = $pdo->prepare($sql);
        $result -> bindParam(':ID',$ID,PDO::PARAM_INT);
        $result -> bindParam(':EID',$EID);
        if($result->execute())
            echo $EID;
        else
            echo 0;
    }
    #======================================================================#
    #createEmployee($user)    讀取全部員工資料                             #
    #======================================================================#
    function loadEmployee(){
        $pdo =$this->server->getConnection();
        $sql = "select `EID`,`Name` FROM  `employee`";
        $result = $pdo->prepare($sql);
        $result->execute();
        $result ->setFetchMode(PDO::FETCH_ASSOC);
        $data;
        $row = $result->fetchAll();
        return $row;
    }
}
?>