<?php

//static型態函數不需要先宣告類別物件即可直接呼叫
echo MathTool::calcTotal(1, 2, 3, 4, 5);

class MathTool {
	
	static function calcTotal () {
		$args = func_get_args();//func_get_args()回傳一個輸入參數組成的陣列
		var_dump($args);//var_dump 函式的功能是用來印出變數的相關訊息於螢幕上，例如變數的值或是變數的種類，
						 //var_dump 可以判斷一般字串變數以及陣列變數
		echo "<BR><BR>";
		$total = 0;
		
		//for each應用
		foreach ($args as $value) {
			$total += $value;
		}
		return $total;
	}
	
}

?>
