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
            $this->model("userData");
            $this->view('personData');
        }
        
        #======================================================================#
        #updateData() 更新個人資料                                             #
        #======================================================================#
        
        public function updateData(){
            $update = $this->model("userData");
            header($update -> changeData($_POST));
        }
        
        #======================================================================#
        #isMessage() 確認是否有未讀訊息，並且回傳具有訊息的帳號陣列            #
        #======================================================================#
        
        public function isMessage(){
            $getStatus = $this->model("userData");
            $this ->view("ajaxReturn",$getStatus -> isMessage());
        }
        #======================================================================#
        #getMessage() 獲取訊息內容，並且回傳陣列                               #
        #======================================================================#
        
        public function getMessage(){
            $getMessage = $this->model("userData");
            $this ->view("ajaxReturn",$getMessage -> getMessage($_POST["friend"]));
        }
        
        #======================================================================#
        #sendMessage() 傳送訊息給好友                                          #
        #======================================================================#
        
        public function sendMessage(){
            $sentMessage = $this->model("userData");
            $sentMessage -> sendMessage($_POST["friend"],$_POST['message']); 
            header("location:/WorldO/");
        }
        #======================================================================#
        #setRead() 設定訊息為已讀                                              #
        #======================================================================#
        
        public function setRead(){
            $sentMessage = $this->model("userData");
            $sentMessage -> setRead($_POST["friend"],"T"); 
        }
        
    }

?>
 