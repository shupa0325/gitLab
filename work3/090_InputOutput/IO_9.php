<?php
header("Content-Type: image/png");//讀取檔頭為PNG檔案

$filename = "cc.png";
$fileHandle = fopen($filename, "rb");   //b避免開啟二進制檔案時出現問題;
echo fread($fileHandle, filesize($filename));//從$fileHandle中讀取filesize($filename)個位元
fclose($filename);

?>