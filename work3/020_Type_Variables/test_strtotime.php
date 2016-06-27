<?php
//strtotime()可進行日期運算，例如幾天前，幾個月後
  $d = strtotime("2012-09-10");
  echo $d;
  echo "<br>";
  echo date("Y-m-d", $d);echo "<br>";
  
  $d = strtotime("2012-09-10 -3 days");
  echo $d;
  echo "<br>";
  echo date("Y-m-d", $d);echo "<br>";
  
  $d = strtotime("2012-09-10 +1 month");
  echo $d;
  echo "<br>";
  echo date("Y-m-d", $d);
?>
