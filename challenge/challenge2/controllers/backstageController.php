<?php
class backstageController extends Controller{
    
    #======================================================================#
    #index() 首頁引導方法                                                  #
    #======================================================================#
    
    public function index(){
        $emp = $this->model("employeeManager");
        $this->view("backstage",$emp->loadEmployee());
    }
    
    #======================================================================#
    #index() 首頁引導方法                                                  #
    #======================================================================#
    
    public function createAct(){
        $act = $this->model("ActivityManager");
        print_r($_POST);
        if($act -> createActivity($_POST))
        echo "   {$act->id}";
        // $this->view("backstage",$act->id);
    }
    public function createEmployee(){
        $emp = $this->model("employeeManager");
        $emp -> createEmployee($_POST);
        $this->view("backstage");
    }
    public function loadEmployee(){
        $emp = $this->model("employeeManager");
        $emp -> loadEmployee();
        $this->view("backstage");
    }
}
?>