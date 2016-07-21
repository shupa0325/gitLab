<?php
    session_start();
    class dataController extends Controller{
        public function logoutAccount(){
            session_destroy();
            header("location:/WorldO/");
        }
        // public function 
        // public function
        // public function
        // public function
        // public function
        // public function
        // public function
    }

?>