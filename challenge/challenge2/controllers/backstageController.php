<?php
class backstageController extends Controller{
    
    #======================================================================#
    #index() 首頁引導方法                                                  #
    #======================================================================#
    
    public function index($index = "null"){
        $emp = $this->model("employeeManager");
        $this->view("backstage",$emp->loadEmployee());
    }
    
    #======================================================================#
    #index() 首頁引導方法                                                  #
    #======================================================================#
    
    public function createAct(){
        $act = $this->model("ActivityManager");
        $act -> createActivity($_POST);
        $this->view("createResult",$act->url);
    }
    public function createEmployee(){
        $emp = $this->model("employeeManager");
        $emp -> createEmployee($_POST);
        header("location:https://day1-shupa-tsai.c9users.io/challenge2/backstage");
    }
    public function loadEmployee(){
        $emp = $this->model("employeeManager");
        $emp -> loadEmployee();
        $this->view("backstage");
    }
}
?>