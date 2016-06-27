<?php

//會自動從0開始放，但若是指定第一個索引為1，後面會接續2,3,4...

$bloodType[] = 'A';//$bloodType[0] = 'A'
$bloodType[] = 'B';//$bloodType[1] = 'B'
$bloodType[] = 'AB';//$bloodType[2] = 'AB'
$bloodType[] = 'O';//$bloodType[3] = 'O'



for ($i = 0; $i <= 3; $i++) {
	echo $bloodType[$i] . "<br />";
}


?>