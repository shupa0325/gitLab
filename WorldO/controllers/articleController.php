<?php
    
class articleController extends Controller{
    #======================================================================#
    #myArticle() 查看我的文章                                              #
    #======================================================================#
    function myArticle(){
        $this -> view("userArticle"); 
    }
    #======================================================================#
    #loadmyArticle() 查看我的文章                                          #
    #======================================================================#
    function loadmyArticle(){
        $load = $this -> model("Article");
        $this ->view("ajaxReturn",$load -> loadmyArticle());
    }
    
    #======================================================================#
    #loadArticle()  讀取文章                                               #
    #======================================================================#
    
    function loadArticle(){
        $load = $this -> model("Article");
        $this ->view("ajaxReturn",$load -> loadArticle());
    }
    
    #======================================================================#
    #newArticle()  新增文章                                                #
    #======================================================================#
    
    function newArticle(){
        $load = $this -> model("Article");
        header("location:/WorldO/");
    } 
    
    #======================================================================#
    #updateArticle()  修改文章                                             #
    #======================================================================#
    function updateArticle(){
        $update = $this -> model("Article");
        $update ->updateArticle($_POST["articleName"],$_POST["content"],$_POST["id"]);
        header("location:/WorldO/article/myArticle");

        
    }
    
    #======================================================================#
    #deleteArticle()  刪除文章                                             #
    #======================================================================#
    function deleteArticle(){
        $delete = $this -> model("Article");
        $this ->view("ajaxReturn",$delete ->deleteArticle($_POST['id']));
    }
    
}
?>