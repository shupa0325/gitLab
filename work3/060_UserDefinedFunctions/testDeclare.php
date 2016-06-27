<?php

function DrawLine() {
	echo "<hr>";
}
//register_tick_function("DrawLine");類似異步任務，搭配declare(tick = int){}使用
register_tick_function("DrawLine");

//每當程式跑3(ticks)行敘述，就呼叫一次DrawLine函式
declare (ticks = 3) {
	echo "1<br>";
	echo "2<br>";
	echo "3<br>";
	echo "4<br>";
	echo "5<br>";
	echo "6<br>";
	echo "7<br>";
	echo "8<br>";
	echo "9<br>";
}

//同樣是三行 但是for迴圈內i++也算是一行敘述，而迴圈內的i內容初始化不算一行
declare (ticks = 3) {
	for ($i = 1; $i <= 9; $i++) {
		echo "$i<br>";
	}
}


?>