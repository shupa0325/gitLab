<?php
header("content-type: text/html; charset=utf-8");
 
$sData = "";
$f = fopen("data.txt", "r");
while (!feof($f))
{
	$line = fgets($f);	//將檔案除去空白跟換行指令
	$sData .= Trim($line) . "<br>";//加入html的換行指令
}
fclose($f);
echo $sData;

?>
