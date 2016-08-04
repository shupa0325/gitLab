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
        <div class = "blackboard">
            <form>
                <table border='1px' style='text-align:center'>
                <tr>
                    <td>活動名稱</td>
                    <td>參加人數限制</td>
                    <td>可攜伴數</td>
                    <td>開始時間</td>
                    <td>結束時間</td>
                    <td>目前參加人數</td>
                    <td>活動編號</td>
                    <td>活動狀態</td>
                    <td>連結網址</td>
                    
                </tr>
                <?php foreach($data as $value){
                    echo '<tr>';
                    foreach ($value as $key => $val){    
                        echo '<td>';
                        echo "$val";
                        echo '</td>';
                        if($key == 'ID')
                        $id = $val;
                        
                    }; 
                    echo "<td><a href='/challenge2/reception/checkActivity/$id'>點我進入</a></td>";
                    echo "<br>";
                    echo '</tr>';
                }; ?>
                </table>
            </form>
    </body>
</html>