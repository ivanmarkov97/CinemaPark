<?php
if(!isset($_SESSION['login']) or !isset($_SESSION['password'])){
		header('Location: ../auth/');
	exit();
}
?>
<html>
<head>
	<meta charset="uft-8">
	<link rel="stylesheet" type="text/css" href="http://mysite.ru/css/table.css">
	<link rel="stylesheet" type="text/css" href="http://mysite.ru/css/select.css">
	<link rel="stylesheet" type="text/css" href="http://mysite.ru/css/button.css">
	<style>
		 body{
		background-image: url(http://mysite.ru/images/background.jpg);
		background-size: 100%;
		background-repeat: repeat-x repeat-y;
		color: #CCCCCC;
	  }
	</style>
</head>
<body>
<h1 align="center">Выбирите тип отчета</h1>
<form action="index.php" method="get">
	<h3>
		<input type="radio" name="report_type" value="profit" style="margin-left: 43%">
		Отчет по продажам<br>
		<input type="radio" name="report_type" value="hall" style="margin-left: 43%">
		Отчет по заполняемости зала<br>
	</h3>
<div align="center">
	<h1 align="center">Выбирите месяц и год отчета</h1>
	<input name="month" placeholder="месяц" size="30%"><br><br>
	<input name="year" placeholder="год" size="30%"><br><br>
	<button class="send" style="margin-top: 50px" name="show_report">Показать</button><br>
	<button class="send" style="margin-top: 50px" name="show_all_reports">Показать все отчеты</button><br>
	<button class='send' style='margin-top: 50px' name='return_to_menu'>В меню</button>
</div>
</form>
</body>
</html>