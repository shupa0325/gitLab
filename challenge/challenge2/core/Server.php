<?php
#server負責進行資料庫連接，將連接資料建給靜態變數$worldO 
class Server{
    private $connection = NULL;
     
    public function __construct() {
        $pdo = new PDO("mysql:host=localhost;dbname=ActivitySystem;port=3306", "guest", "guest");
        $pdo->exec("SET CHARACTER SET utf8");
        $this->connection = $pdo;
    }
     
    public function getConnection(){
        return $this->connection;
    }
     
     
    public function closeConnection(){
        $this->$connection = NULL;
    }
}
?>
