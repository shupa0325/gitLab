<?php
class backstageController extends Controller{
    
    #======================================================================#
    #index() 首頁引導方法                                                  #
    #======================================================================#
    
    public function index(){
        $this->view("backstage");
    }
    
    #======================================================================#
    #index() 首頁引導方法                                                  #
    #======================================================================#
    
    public function createAct(){
        $act = $this->model("ActivityManager");
        if($act -> createActivity($_POST))
        $this->view("backstage",$act->id);
    }
    public function createEmployee(){
        $emp = $this->model("employeeManager");
        $emp -> createEmployee($_POST);
        $this->view("backstage");
    }
    public function loadEmployee(){
        
    }
}
?>