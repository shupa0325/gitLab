<?php

$sData = "908872526535442041985072568716";
$result = "01234567890";
$iLen = strlen($sData);										//測量字串長度
for ($iPos = 0; $iPos < $iLen; $iPos++)
{
	$ch = substr($sData, $iPos, 1);							//將sData內的第(iPos+1)的值指定給$ch
	$result = $ch . str_replace($ch, "", $result);			//將$result的內容改成$ch加上str_replace($ch, "", $result)
															//str_replace() 函数將字符串中的跟$ch一樣的字源轉換成""

}
echo substr($result, 0, 5) . "-" . substr($result, 5, 5);
?>