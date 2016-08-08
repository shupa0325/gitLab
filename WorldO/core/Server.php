<?php
    #server負責進行資料庫連接，將連接資料建給靜態變數$worldO 
    class Server {
        public static $worldO;
        public static function setConnect() {
            Server::$worldO=mysqli_connect("localhost", "guest", "guest", "worldO");
            mysqli_set_charset(Server::$worldO, "utf8");
        }
    }
    
    // class myServer{
    //     private static $connection = NULL;
         
    //     function __construct() {
    //         $pdo = new PDO("mysql:host=localhost;dbname=worldO;port=3306", "guest", "guest");
    //         $pdo->exec("SET CHARACTER SET utf8");
    //         self::$connection = $pdo;
    //         $pdo = null;
    //     }
         
    //     function getConnection(){
    //         return self::$connection;
    //     }
         
         
    //     function closeConnection(){
    //         self::$connection = NULL;
    //     }
    // }
    ?>