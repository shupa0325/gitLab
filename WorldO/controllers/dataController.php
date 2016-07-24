<?php

    class dataController extends Controller{
        #======================================================================#
        #logoutAccount()  登出帳號                                             #
        #======================================================================#
        
        public function logoutAccount(){
            session_destroy();
            header("location:/WorldO/");
        }
        
        #======================================================================#
        #editData() 編輯個人資料                                               #
        #======================================================================#
        
        public function editData(){
            $this->model("userData",$_SESSION["username"]);
            $this->view('personData');
        }
        
        #======================================================================#
        #updateData() 更新個人資料                                             #
        #======================================================================#
        
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
 