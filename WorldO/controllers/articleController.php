<?php
    session_start();
    class articleController extends Controller{
        function loadArticle(){
            $load = $this -> model("Article");
            echo $load -> loadArticle($_SESSION['username']);
            
        }
        function newArticle(){
            $load = $this -> model("Article");
           if(!$load->newArticle($_SESSION['username'],$_POST))
           {
              echo "成功";
              header("refresh:1;/WorldO/");
           }else{
              echo "失敗";
              header("refresh:1;/WorldO/");
           }
        } 
    }
?>