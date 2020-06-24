<?php
session_start();
if(!isset($_SESSION["user_name"])) {
	$no_login_url = "index.php";
	header("Location: {$no_login_url}");
	exit;
}
?>
<!DOCTYPE html>
<html lang="ja">
<meta http-equiv="content-type" charset="utf-8">
<head>
	<title>stersoft公式サイト</title>
	<link rel="stylesheet" type="text/css" href="../css/menu.css">
</head>
<body>
<font face="sans-serif">
<ul id="normal" class="dropmenu">
 <li><a href="../">top</a></li>
 <li><a href="../product">product</a></li>
 <li><a href="../download">download</a></li>
 <li><a href="../news">news</a></li>
 <li><a href="">admin</a></li>
</ul>
</body>