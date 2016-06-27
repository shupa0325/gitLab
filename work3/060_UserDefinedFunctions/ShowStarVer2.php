<?php

//函數宣告 function name(參數列宣告){ code... }
function ShowStar($iCount)
{
	$result = "";
	for ($i = 1; $i <= $iCount; $i++)
	{
		$result .= "*";
	}
	echo $result;
}

//有參數的函數呼叫
$iHowMany = 3;
ShowStar($iHowMany);
?>