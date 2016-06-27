<?php
//利用isset確認是否_POST有輸入內容值，有的話則執行function processFile ( $_FILES ["file1"] );
if (isset ( $_POST ["btnOK"] )) {
	processFile ( $_FILES ["file1"] );
}

function processFile($objFile) {
	//如果檔案上傳失敗則顯示錯誤
	if ($objFile ["error"] != 0) {
		echo "Upload Fail! ";
		echo "<a href='javascript:window.history.back();'>Back</a>";
		return;
	}
	
	$test = move_uploaded_file ( $objFile ["tmp_name"], "./" . $objFile ["name"] ); //move_uploaded_file() 函數將上傳的文件移動到新位置。
																					//若成功，则返回 true，否则返回 false。
	if (! $test) {
		die ( "move_uploaded_file() faile" );
	}
	
	echo "File uploaded<br />";
	echo "File name: " . $objFile ["name"] . "<br />";
	echo "File type: " . $objFile ["type"] . "<br />";
	echo "File size: " . $objFile ["size"] . "<br />";
	
	echo "--  Done --";
	exit ();
}

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Lab - Upload file</title>
</head>
<body>
	<form method="post" enctype="multipart/form-data" action="">
		1. Select a file：<input type="file" name="file1" /><br />	<!--選擇檔案-->
		<input type="submit" name="btnOK" value="2. 送出資料" />	<!--表單資料送出-->
	</form>
</body>
</html>