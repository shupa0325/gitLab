<?php

class App {
    
   public function __construct() {
        //抓取GET內資料並轉為陣列
        $url = $this->parseUrl();
       
        //$controllerName會等於C資料夾內的某項Controller的名字
        $controllerName = "{$url[0]}Controller";
        
        //如果導入為首頁，則自動導向guestController
        if(!$url)
        $controllerName = "guestController";
        
        //如果檔案不存在，就不管她
        if (!file_exists("controllers/$controllerName.php"))
            header("location:/WorldO/");
        
        require_once "controllers/$controllerName.php";
        $controller = new $controllerName;
        
        
        $methodName = isset($url[1]) ? $url[1] : "index";
        
        
        if (!method_exists($controller, $methodName))
            return ;
            
        unset($url[0]); 
        unset($url[1]);
        
        $params = $url ? array_values($url) : Array();
        call_user_func_array(Array($controller, $methodName), $params);
        
    }
    
    public function parseUrl() {
        if (isset($_GET["url"])) { 
            $url = rtrim($_GET["url"], "/");
            $url = explode("/", $url);
            return $url;
        }
    }
    
}

?>
