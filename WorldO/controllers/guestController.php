<?php
    class guestController extends Controller{
        
        #======================================================================#
        #index() 首頁引導方法                                                  #
        #======================================================================#
        
        public function index(){
            if(isset($_SESSION['username']))
            {$this->view("personalPage");}
            else
            {$this->view("index");}
        }
        
        #======================================================================#
        #loginAccount() 登入帳號                                               #
        #======================================================================#
        
        public function loginAccount(){
            $check = $this->model("databaseManager");
            
            if($check ->loginAccount($_POST["inputAccount"],$_POST["inputPassword"]) == 3)
            {
            $_SESSION['username']= $_POST["inputAccount"];
            echo "<script>alert('success');</script>";
            header("refresh:1;/WorldO/");
            }
            else{
            echo "<script>alert('false');</script>";
            header("refresh:1;/WorldO/");

            }
            $check->close();
        }
        
        #======================================================================#
        #createAccount() 創建帳號                                              #
        #======================================================================#
        
        public function createAccount(){
            $createAcc = $this->model("databaseManager");
            
            if($createAcc->createAccount($_POST))
            {   
                echo "<script>alert('success');</script>";
                header("refresh:1;/WorldO/");
            }
            else{
                echo "<script>alert('false');</script>";
                header("refresh:1;/WorldO/");
            }
        }
        
        #======================================================================#
        #callMethod() 檢查帳號核可性                                           #
        #======================================================================#
        
        public function callMethod(){
            $check = $this->model("databaseManager");
           
            $check ->ajaxCheck($_POST["userName"]);
        
            $check->close();
        }
    }

?>