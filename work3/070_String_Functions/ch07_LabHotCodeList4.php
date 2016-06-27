<?php
$sData = "";
$f = fopen("pick3.txt", "r");//讀檔，讀取模式
while (!feof($f))//指標不為空就持續讀取指標內容
{
	$line = fgets($f);
	$sData .= Trim($line);//去掉空白
}
fclose($f);
echo HotCodeList($sData);//將資料放入並將CodeList函數化


function HotCodeList($sData)
{
	$result = "01234567890";
	$iLen = strlen($sData);
	for ($iPos = 0; $iPos < $iLen; $iPos++)
	{
		$ch = substr($sData, $iPos, 1);
		$result = $ch . str_replace($ch, "", $result);
	
	}
	return substr($result, 0, 5) . "-" . substr($result, 5, 5);
}
?>
