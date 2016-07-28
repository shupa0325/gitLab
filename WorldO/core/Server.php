<?php
    #server負責進行資料庫連接，將連接資料建給靜態變數$worldO 
    class Server {
        public static $worldO;
        public static function setConnect() {
            Server::$worldO=mysqli_connect("localhost", "guest", "guest", "worldO");
            mysqli_set_charset(Server::$worldO, "utf8");
        }
    }
    ?>