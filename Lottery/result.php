<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Lottery Game</title>
    </head>
    <body>
        <?php
            $rand = 10;
            for($i=1;$i<43;$i++)
              {  $ans[$i] = $i;}
        
            for($i= 0;$i<$rand;$i++)
            {
                $ch =rand(1,42);
                $temp=$ans[($i%7+1)];
                $ans[($i%7+1)]=$ans[$ch];
                $ans[$ch] = $temps;
                echo "$ch $temp {$ans[$ch]} <BR>";
            }
            foreach ($ans as $i) {
                echo "here $i <BR>";   
            }
        ?>
        </form>
    </body>
</html>