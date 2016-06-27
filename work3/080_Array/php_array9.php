<?php
//自定義陣列排序法
function cmp($a, $b)
{
    if ($a == $b) {
        return 0;
    }
    return ($a < $b) ? -1 : 1;
}

$a = array(3, 2, 5, 6, 1);          
usort($a, "cmp");//透過自定義函數將陣列排序
foreach ($a as $key => $value) {
    echo "$key: $value <br />";
}

?>