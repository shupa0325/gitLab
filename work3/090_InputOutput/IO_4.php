<?php
header("content-type: text/html; charset=utf-8");

$lines = file ( 'data.txt' );	//將data.txt資料以陣列的方式讀入

foreach ( $lines as $line_num => $line ) {
	echo "#<i>$line_num</i> : " . 
		 htmlspecialchars ( $line ) . "<br>\n";	//將< >以及html相關字元自動轉換為實體字
}

?> 