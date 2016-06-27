<?php

//類別的宣告，與預設函式__call的覆寫

//物件變數宣告，資料型態為CTest
$obj = new CTest();

//obj內無此函數
$obj->Foo(1, 2, 3, 4);


class CTest {
	//此為預設函數function __call之覆寫，當試圖呼叫不存在的函式時會自動呼叫此函式$MethodName放入呼叫的函式 
	//$Parameters則是放入此不存在的函式所引入的參數
	function __call($MethodName, $Parameters) {
		echo "Name: ", $MethodName, "<br>";
		echo "<pre>" . var_dump($Parameters) ."</pre>";
		echo "<hr>";
	}
	
}


?>
