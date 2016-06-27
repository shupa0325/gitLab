<?php

$a = 12;
$b = "34";

$result = $a + $b; // 46
echo $result;
echo "<br><bh>";

$result = $a . $b; // 1234 .為字串相接
echo $result;
echo "<br><bh>";

$result = $a + intval($b);  // 46
echo $result;
echo "<br><bh>";


?>