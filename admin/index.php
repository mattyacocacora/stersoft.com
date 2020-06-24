<?php
session_start();
$error_message = "";
if(isset($_POST["login"])) {
	if($_POST["user_name"] == "test" && $_POST["password"] == "test") {
		$_SESSION["user_name"] = $_POST["user_name"];
		$login_success_url = "admin.php";
		header("Location: {$login_success_url}");
		exit;
	}
$error_message = "※ID、もしくはパスワードが間違っています。<br>　もう一度入力して下さい。";
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8" />
　　　<title>login page</title>
	<link rel="stylesheet" type="text/css" href="../css/menu.css">
	<font face="sans-serif">
</head>

<ul id="normal" class="dropmenu">
 <li><a href="../">top</a> </li>
 <li><a href="../product">product</a> </li>
 <li><a href="../download">download</a></li>
 <li><a href="../news">news</a></li>
 <li><a href="">admin</a></li>
</ul>

<?php
if($error_message) {
	echo $error_message;
}
?>


<form action="index.php" method="POST">
	<p>ログインID：<input type="text" name="user_name"></p>
	<p>パスワード：<input type="password" name="password"></p>
	<input type="submit" name="login" value="ログイン">
</form>		


</html>

