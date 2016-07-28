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
        
            $_SESSION['username']=($check ->loginAccount($_POST["inputAccount"],$_POST["inputPassword"]) == 3)?
            $_POST["inputAccount"]:NULL;
            
            header("location:/WorldO/");
            
        }
        
        #======================================================================#
        #createAccount() 創建帳號                                              #
        #======================================================================#
        
        public function createAccount(){
            $createAcc = $this->model("databaseManager");
            
            $createAcc->createAccount($_POST);
            header("location:/WorldO/");


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