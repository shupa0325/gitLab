<?php
header("content-type: text/html; charset=utf-8");

$season = array(
    'spring' => '春', 
    'summer' => '夏', 
    'autumn' => '秋', 
    'winter' => '冬'); 


//陣列搭配for each第二回合，即便索引不為數字她依然會完整跑完所有元素
echo "每年的四季分別為：<br>";
foreach ($season as $key => $value){
	echo $key, "=>", $value, "<br>";
}


?>