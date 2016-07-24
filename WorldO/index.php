<?php
#所有網頁皆採用UTF-8，皆導入此區塊所有內容============
header("Content-Type:text/html; charset=utf-8");
session_start();
require_once "core/Server.php";
#======================================================

require_once 'core/App.php';
require_once 'core/Controller.php';

$app = new App();

?>
