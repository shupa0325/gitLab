<?php
$showStr = "Genius is|one/percent inspiration and ninety-nine percent perspiration.";
// strtok 函式用來將字串切割成更小的字串，僅第一次需要調用$showStr
$s = strtok($showStr, " ");
while ($s != "")
{
   echo $s. "*" . "<br>";
   $s = strtok(" .|/");
   
   
   // 如果這麼寫，程式會沒完沒了...
   // $s = strtok($showStr, " ");
}
?>