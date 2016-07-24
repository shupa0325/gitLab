<?php
    class guestController extends Controller{
        
        
        public function index(){
            if(isset($_SESSION['username']))
            {$this->view("personalPage");}
            else
            {$this->view("index");}
        }
        
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
            echo $check ->loginAccount($_POST["inputAccount"],$_POST["inputPassword"]);
            echo $_POST["inputAccount"].$_POST["inputPassword"];
            }
            $check->close();
        }
        
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
        
        public function callMethod(){
            $check = $this->model("databaseManager");
           
            $check ->ajaxCheck($_POST["userName"]);
        
            $check->close();
        }
    }

?>