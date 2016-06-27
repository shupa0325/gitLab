<?php
$result = '';
function glue ($val)
{
	global $result;		//引入全域變數
	$result .= $val;
}
$array = array ('a', 'b', 'c', 'd');//宣告一個string array初始化方式
array_walk ($array, 'glue');	//將array引入並重複執行函數glue直到元素都用完
echo $result;
?>