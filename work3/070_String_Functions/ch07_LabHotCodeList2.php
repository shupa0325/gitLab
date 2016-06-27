<?php

//讀檔指令教學，fopen與fget
$f = fopen("pick3.txt", "r");	//開啟檔案pick3.txt"並設為讀取模式r
while (!feof($f))	//只要$f指標位置所指向列數不為空
{
	$line = fgets($f);	//讀取當行資料並將指標移向下一行
	echo "$line<br>";
}
fclose($f);		//用完要記得關掉
echo "--End--";
?>