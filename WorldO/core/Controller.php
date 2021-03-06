<?php
    
        #======================================================================#
        #Controller 基本類別                                                   #
        #======================================================================#
        
class Controller {
    public function model($model,$data = null){
        require_once "model/$model.php";
        return new $model($data);
    }
    
    public function css($name){
        echo '<link rel="stylesheet" href="/WorldO/css/'.$name.'.css"/>';
    }
    
    public function script($name){
        echo '<script src="/WorldO/js/'.$name.'.js"></script>';
    }
    
    public function view($view, $data = Array()) {
        require_once "views/$view.php";
    }
    
    
}

?>