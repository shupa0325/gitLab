<?php

class Controller {
    public function model($model) {
        require_once "model/$model.php";
        return new $model();
    }
    
    public function css($name){
        echo '<link rel="stylesheet" href="/WorldO/css/'.$name.'.css"/>';
    }
    
    public function script($name){
        echo '<script src="/WorldO/js/'.$name.'.js"></script>';
    }
    
    // public function image($name){
    //     echo '<link rel="icon" href="/World/images/'.$name.'.ico" type="image/x-icon" />';
    // }
    
    public function view($view, $data = Array()) {
        require_once "views/$view.php";
    }
    
    
}

?>