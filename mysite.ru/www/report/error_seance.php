<?php
if(!isset($_SESSION['login']) or !isset($_SESSION['password'])){
		header('Location: ../auth/');
	exit();
}
?>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="http://mysite.ru/css/button.css">
</head>

<body>

<div align="center">

<h1>На этот фильм нет сеансов</h1>
<form action="index.php" method="get">
	<button class="send" style="margin-top: 50px" name="return_to_menu">В меню</button>
</form>
</div>


</body>
</html>