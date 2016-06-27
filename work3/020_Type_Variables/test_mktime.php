<?php
  //mktime() 函數返回一個日期的 Unix時間。
  $d = mktime(13, 30, 0, 9, 10, 2012);
  echo $d;
  echo "<br>";
  //data則返回一般人看得懂的形式
  echo date("Y-m-d H:i:s", $d);
?>
