<?php

    class block{
        public  $temp;
        public  $temp2;
        #類別生成
        public function __construct($array){
            $this ->temp = $array;
            $this ->temp2 = $array;
        }
        #印出陣列
        public function printArray(){
            echo "<br>";
            foreach($this->temp as $value){
                foreach($value as $va){
                    echo "$va,";
                }
                echo "<br>";
            }
            echo "<br>";
        }
        #計算最大圖形陣列
        public function math(){
             $max;
            for($i = 0;$i < count($this->temp); $i++){
                for($j = 0;$j < count($this->temp[$i]); $j++){
                    if($this -> temp[$i][$j]){
                        $this -> temp[$i][$j] = 0;
                        $stack ++;
                        $stack += $this->remath($i,$j);
                    }
                    if($stack > $max ){
                    $max = $stack;
                    $re[0] = $i;
                    $re[1] = $j;
                    }
                    $stack = 0;
                }
                
            }
            $this->redraw($re[0],$re[1]);
            return $max;
        }
        #遞迴運算
        private function remath($i,$j){
                if(($i+1 < count($this->temp)) && $this -> temp[$i+1][$j]){
                    $stack++;
                    $this -> temp[$i+1][$j] = 0 ;
                    $stack += $this-> remath($i+1,$j);
                }
                if(($i-1 >= 0) && $this -> temp[$i-1][$j]){
                    $stack++;
                    $this -> temp[$i-1][$j] = 0 ;
                    $stack += $this-> remath($i-1,$j);
                }
                if(($j+1 < count($this->temp[$i])) && $this -> temp[$i][$j+1]){
                    $stack++;
                    $this -> temp[$i][$j+1] = 0 ;
                    $stack += $this-> remath($i,$j+1);
                }
                if(($j-1 >= 0) && $this -> temp[$i][$j-1]){
                    $stack++;
                    $this -> temp[$i][$j-1] = 0 ;
                    $stack += $this-> remath($i,$j-1);
                }
            
            return $stack;
            
        }
        #陣列重畫
        private function redraw($i,$j){
            if(($i+1 < count($this->temp)) && $this -> temp2[$i+1][$j]){
                $this -> temp2[$i+1][$j] = 0 ;
                $this -> temp[$i+1][$j] = 1 ;
                $this-> redraw($i+1,$j);
            }
            if(($i-1 >= 0) && $this -> temp2[$i-1][$j]){
                $this -> temp2[$i-1][$j] = 0 ;
                $this -> temp[$i-1][$j] = 1 ;
                $this-> redraw($i-1,$j);
            }
            if(($j+1 < count($this->temp[$i])) && $this -> temp2[$i][$j+1]){
                $this -> temp2[$i][$j+1] = 0 ;
                $this -> temp[$i][$j+1] = 1 ;
                $this-> redraw($i,$j+1);
            }
            if(($j-1 >= 0) && $this -> temp2[$i][$j-1]){
                $this -> temp2[$i][$j-1] = 0 ;
                $this -> temp[$i][$j-1] = 1 ;
                $this-> redraw($i,$j-1);
            }
            
            
        }
    }
?>
