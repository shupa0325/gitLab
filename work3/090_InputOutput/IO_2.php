<?php

$fileDir = dirname ( __FILE__ );
$fileResource = opendir ( $fileDir );	//打開檔案目錄

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
</head>
<body>

	<p>File list:</p>
	<ul>
		
	<?php while ($item = readdir($fileResource)) : //列出目錄內檔案內容?>
	
		<li><?php echo $item; ?></li>
	
	<?php endwhile; ?>
	</ul>

<?php closedir($fileResource); //關閉經由opendir所打開的目錄 ?>
</body>
</html>
