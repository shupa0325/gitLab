<?php
	$testArray = array("A1", "A2", "A18");
	sort($testArray);						//將陣列以索引的大小排序
	var_dump($testArray);
	
	echo "<br />";
	
	natsort($testArray);					//將陣列以內容值大小排序
	var_dump($testArray);
?>
