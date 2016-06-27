<?php
/*
	for (初始化變數值; 跳出判斷式; 每圈執行後運算) {
		 // code...
	}
	break;強制跳離迴圈
	
*/
for ($i = 1; $i <= 3; $i++) {
	for ($j = 1; $j <= 4; $j++) {
		echo "$i , $j <br>";
		if (($i + $j) % 4 == 0)
		    break;
	}
	echo "-----<br>";
}


?>