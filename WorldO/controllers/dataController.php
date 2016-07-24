<?php

    class dataController extends Controller{
        
        public function logoutAccount(){
            session_destroy();
            header("location:/WorldO/");
        }
        
        public function editData(){
            $this->model("userData",$_SESSION["username"]);
            $this->view('personData');
        }
        public function updateData(){
            $update = $this->model("userData",$_SESSION["username"]);
            if($update -> changeData($_POST)){
                echo "success";
                header("refresh:1;/WorldO/");
            }else{
                echo "false";
                header("refresh:1;/WorldO/data/editData");
            }
        }
    }

?>
 