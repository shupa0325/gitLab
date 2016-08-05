<?php
class receptionController extends Controller{
    
    #======================================================================#
    #index() 首頁引導方法                                                  #
    #======================================================================#
    
    public function index(){
        $getAct = $this -> model("ActivityManager");
        $data = $getAct ->getAllActivity();
        $this -> view("reception",$data);
    }
    public function checkActivity($url){
        $Act = $this -> model("ActivityManager");
        $this -> view("activity",$Act -> getActivity($url));
    }
    public function joinActivity($ID){
        $Act = $this -> model("ActivityManager");
        $Act -> updateActivity($ID);
    }
}
?>