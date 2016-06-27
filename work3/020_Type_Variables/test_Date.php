<?php

// gettype可獲得變數的資料型態

  $x = getdate();
  echo gettype($x), "<br>";
  
//date()則可將getdate資料轉換為日期，輸出為字串  
  
  $x = date('Y-m-d H:i:s');
  echo $x, "<br>";
  echo gettype($x), "<br>";
  
  $x = gmdate('Y-m-d H:i:s');
  echo $x, "<br>";
  //轉換為UNIX時間
  $x = strtotime(gmdate('Y-m-d H:i:s'));
  echo $x, "<br>";
  echo gettype($x), "<br>";
  
?>