<?php

$a = array('1', '2');		//初始化陣列
foreach ($a as $k => $x)	//$a->陣列 ,$k -> 索引值,$x -> value
{
	$x = '3';
}

foreach ($a as $k => $x)
{
	echo "$k => $x <br>";
}

?>