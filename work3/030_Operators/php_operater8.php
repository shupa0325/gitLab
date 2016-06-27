<?php
  
    echo "flag 1<br>";
    //@require("MyLibrary.php");產生錯誤，故後續程式無法執行
    @require("MyLibrary.php");
    echo "flag 2<br>";

?>