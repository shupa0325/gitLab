<?php
class receptionController extends Controller{
    
    #======================================================================#
    #index() 首頁引導方法                                                  #
    #======================================================================#
    
    public function index(){
        $this->view("reception");
    }
    public function ajaxGetActivity(){
        
    }
    
}
?>