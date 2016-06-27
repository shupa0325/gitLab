<?php
//fuction的特殊呼叫方式


function test($i) {
	return $i + 1;
}

$x = 1;
echo test($x)."<BR>";

$x = 2;
$p = "test";
echo $p($x);//同等於test($x)

?>