<?php
    include_once "database.php";
    
    Server::setConnect();
    $a = new personAccount([0,1]);
    $a -> printData();
    $a -> checkAllFriend("shupa0325");
    class personAccount{
        private $userData;
        public function __construct($data){
                foreach($data as $index => $value){
                    $this->userData[$index] = $value;
                }
        }
        public function printData(){
            foreach($this->userData as $index => $value){
                    echo $index.":".$value."<br>";
                }
        }
    }
?>