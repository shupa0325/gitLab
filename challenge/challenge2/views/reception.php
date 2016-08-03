<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>前台 </title>
        <?= $this->script('jquery') ?>
        <?= $this->script('bootstrap.min') ?>
        <?= $this->css('bootstrap.min') ?>
    </head>
    <body>
        <?php require_once("basic.html");?>
        <form>
            <?php foreach($data as $value){
                echo '<tr>';
                foreach ($value as $key => $val){    
                    echo '<td>';
                    echo "$key : $val , ";
                    echo '</td>';
                }; 
                echo "<br>";
                echo '</tr>';
            }; ?>
        </form>
    </body>
</html>