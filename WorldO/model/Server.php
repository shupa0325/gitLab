<?php
    #server負責進行資料庫連接，將連接資料建給靜態變數$worldO 
    class Server {
        public static $worldO;
        public static function setConnect() {
            $worldO=mysqli_connect("localhost", "guest", "guest", "worldO");
            mysqli_set_charset($worldO, "utf8");
            Server::$worldO=$worldO;
        }
    }
    ?>