<?php

echo "Path and FileName:" . __FILE__ . "<br />";        //__FILE_取得路徑與檔名
echo "Path: " . dirname ( __FILE__ );                   //dirname ( __FILE__ )取得檔案路徑
echo "Filename: " . basename ( __FILE__ ) . "<br />";   //basename ( __FILE__ )取得檔名
echo "Filesize: " . filesize ( __FILE__ )             //filesize ( __FILE__ )取得檔案大小
?>
