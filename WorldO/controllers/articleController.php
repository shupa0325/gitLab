<?php
    
    class articleController extends Controller{
        #======================================================================#
        #myArticle() 查看我的文章                                          #
        #======================================================================#
        function myArticle(){
            $this -> view("userArticle"); 
        }
        #======================================================================#
        #loadmyArticle() 查看我的文章                                          #
        #======================================================================#
        function loadmyArticle(){
            $load = $this -> model("Article");
            echo $load -> loadmyArticle($_SESSION['username']);
        }
        
        #======================================================================#
        #loadArticle()  讀取文章                                               #
        #======================================================================#
        
        function loadArticle(){
            $load = $this -> model("Article");
            echo $load -> loadArticle($_SESSION['username']);
            
        }
        
        #======================================================================#
        #newArticle()  新增文章                                                #
        #======================================================================#
        function newArticle(){
            $load = $this -> model("Article");
           if($load->newArticle($_SESSION['username'],$_POST))
           {
              echo "成功";
              header("refresh:1;/WorldO/");
           }else{
              echo "失敗";
              header("refresh:1;/WorldO/");
           }
        } 
        #======================================================================#
        #updataArticle()  修改文章                                             #
        #======================================================================#
        function updataArticle(){
        }
        
        #======================================================================#
        #deleteArticle()  刪除文章                                             #
        #======================================================================#
        function deleteArticle(){
        }
        
    }
?>