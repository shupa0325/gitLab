<?php


//func_get_args()回傳一個輸入參數組成的陣列


echo calcTotal(1, 2, 3, 4, 5);#傳入參數1, 2, 3, 4, 5

function calcTotal () {
	$args = func_get_args();#傳入內容為參數1, 2, 3, 4, 5的陣列
	// var_dump($args);
	$total = 0;
	foreach ($args as $value) {
		$total += $value;
	}
	return $total;
}


?>
