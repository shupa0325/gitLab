



<?php

//while迴圈的基本使用，i += 1效果同等於i++;


$iSum = 0;
$i = 1;

while ($i <= 10)
{
	$iSum += $i;
	$i += 1;
}
echo $iSum;

echo "<hr>";


$iSum = 0;
$i = 0;
while ($i < 10)
{
	$i++;
	$iSum += $i;	
}
echo $iSum
?>