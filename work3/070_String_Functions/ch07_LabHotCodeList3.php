<?php
$sData = "";
$f = fopen("pick3.txt", "r");		//讀取檔案
while (!feof($f))					
{
	$line = fgets($f);
	$sData .= Trim($line);			//將所有空白以及換行的字元給消除
}
fclose($f);
//echo $sData;

// GetHotCodeList
$result = "01234567890";
$iLen = strlen($sData);
for ($iPos = 0; $iPos < $iLen; $iPos++)
{
	$ch = substr($sData, $iPos, 1);
	$result = $ch . str_replace($ch, "", $result);

}
echo substr($result, 0, 5) . "-" . substr($result, 5, 5);
?>