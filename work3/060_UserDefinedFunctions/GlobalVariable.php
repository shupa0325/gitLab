<?php
//全域變數搭配函數與區域變數之應用

$a = 20;	//全域變數


function myFunction($b) {
	//尚未呼叫全域變數，且區域變數沒設定，故無輸出數值
	echo "a = $a<br>";
	
	//定義區域變數
	$a = 30;
	
	//輸出區域變數
	echo "a = $a<br>";
	
	//宣告全域變數
	global $a, $c;
	
	//輸出全域變數
	echo "a = $a<br>";
	
	//全域變數c會於此修改
	return $c = ($b + $a);
}

//由於呼叫myFunction(40)會回傳60而且使得C變成60,故60+60=120
echo myFunction(40) + $c;
?>