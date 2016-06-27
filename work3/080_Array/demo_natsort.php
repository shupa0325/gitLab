<?php

$a = array('a1', 'a3', 'a20', 'a15');

natsort($a);        //將內容值自動排序

var_dump(natsort($a)); //natsort回傳一個布林函數
echo "<br>";

foreach ($a as $k => $x)
{
	echo "$k => $x <br>";
}

?>
