<?php
header("content-type: text/html; charset=utf-8");
	$contents = file_get_contents('data.txt');			//將data.txt內容以string讀取到變數$contents
	echo (str_replace("\r\n", "<br />", $contents));
?>