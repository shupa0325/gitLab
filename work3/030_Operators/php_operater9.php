<?php

#將X的記憶體位置給Y故修改Y的話X的執會跟著改變，unset會將X參照的記憶體位置給消除

$x = 100;
$y = &$x;

$y = 200;
echo "x = $x </br>";
unset($x);
echo "y = $y </br>";

?>