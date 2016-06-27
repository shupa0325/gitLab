<?php
  $x = 3;
  
  //and條件運算有分成 & 跟 &&,若使用&& 則第一項條件若為false則不執行第二項條件運算
  //若使用&，則無論第一項條件是否成立，第二項條件皆會進行判斷
  
  
  if ($x >= 10 && foo())  //foo()不執行 由於$x >=10為false故直接往後執行
    echo "yes";
  else
    echo "no";
    
  echo "<hr>";

  $x = 3;
  if ($x >= 10 & foo())   //foo()執行 即使$x >=10為false也會執行第二項條件運算
    echo "yes";
  else
    echo "no";
    
function foo()
{
   echo "foo() is running.<br>";
}

?>