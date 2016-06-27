<?php

#$args[x]會索引到參數列第x+1項，
#而可以用isset確認是否參數列有引數

//參數列沒宣告
function ShowStar() {
	//func_get_args()回傳一個輸入參數組成的陣列
	$args = func_get_args();
	
	
	if (!isset($args[0]))//若呼叫函數時有給參數，$args[0]會尋找第一個參數的值
		$args[0] = 5;
	if (!isset($args[1]))
		$args[1] = "*";
	ShowStar_all($args[0], $args[1]);
}

function ShowStar_all($iCount, $sWhat = "*")
{
	if ($iCount <= 0)
	{
		echo "iCount > 0 please";
		return;
	}
	if ($iCount > 20)
	{
		echo "iCount <= 20 please";
		return;
	}
	
	$result = "";
	for ($i = 1; $i <= $iCount; $i++)
	{
		$result .= $sWhat;
	}
	echo $result;
}

ShowStar(2, "^");
ShowStar(null, "$");
ShowStar();
?>