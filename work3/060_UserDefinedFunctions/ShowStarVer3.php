<?php

//參數列可直接預設參數值
function ShowStar($iCount, $sWhat = "*")
{
	$result = "";
	for ($i = 1; $i <= $iCount; $i++)
	{
		//字串相接需使用'.'而不是'+' 相當於$result =$result . $sWhat;
		$result .= $sWhat;
	}
	echo $result;
}

$iHowMany = 2;
ShowStar($iHowMany);
	echo "<br><bh>";
	
	//但是依然可以放其他字串取代
ShowStar($iHowMany,"change");

?>