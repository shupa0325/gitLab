<?php
    header("content-type: text/html; charset=utf-8");//設定字碼
    
    //array()在索引不為數字的應用方式
    $myArray = array('myName'=>'Jeremy', 'myHeight'=>191, 'myWeight'=>91);
    echo "大家好，我的名字叫".$myArray['myName']
?>