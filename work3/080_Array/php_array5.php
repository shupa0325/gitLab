<?php
header("content-type: text/html; charset=utf-8");

$season = array('春', '夏', '秋', '冬'); 


//array搭配for each的應用，foreach會動態將陣列內所有元素作為迴圈的index執行一次
echo "每年的四季分別為：";
foreach ($season as $value){
	echo $value;
}

?>