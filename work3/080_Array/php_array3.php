<?php
//陣列宣告不一定要一行一行宣告，可以使用array()
$bloodType = array("A", "B", "AB", "O");//等效於$bloodType = ["A", "B", "AB", "O"];

for ($i = 0; $i <= 3; $i++) {
	echo $bloodType[$i] . "<br />";
}

//若是不希望從0開始放，可以加上索引例如下方，而array()會重新設定陣列，故原本的$bloodType[0]內容會消失
$bloodType = array(1 => "B", "AB", "O");
for ($i = 0; $i <= 3; $i++) {
	echo $bloodType[$i] . "<br />";
}

?>
