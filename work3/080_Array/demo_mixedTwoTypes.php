<?php

echo '<meta charset="UTF-8">';

$a = array('xxx', 'book' => '書籍', 'yyy', 'desk' => '書桌', 'pen' => '筆');//索引值為字串的元素不會引響整數索引值的順序

foreach ($a as $k => $s)
{
	 echo "$k = $s<br>";
}

?>