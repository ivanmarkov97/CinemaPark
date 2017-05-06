<?php
if(!isset($_SESSION['login']) or !isset($_SESSION['password'])){
	include '../login.php';
	exit();
}
?>
<html>
<head>
	<meta charset="uft-8">
	<style>
		 body{
		background-image: url(images/background.jpg);
		background-size: 100%;
		background-repeat: repeat-x repeat-y;
		color: #CCCCCC;
	  }

table {
font-family: "Lucida Sans Unicode", "Lucida Grande", Sans-Serif;
font-size: 14px;
border-radius: 10px;
border-spacing: 0;
text-align: center;
background: #252F48;
}
th {
color: #EDB749;
color: white;
border-bottom: 1px solid #37B5A5;
padding: 10px 20px;
}
th, td {
border-style: solid;
border-width: 0 1px 1px 0;
border-color: white;
}
th:first-child, td:first-child {
text-align: left;
}
th:first-child {
border-top-left-radius: 10px;
}
th:last-child {
border-top-right-radius: 10px;
border-right: none;
}
td {
padding: 10px 20px;
color: #CAD4D6;;
}
tr:last-child td:first-child {
border-radius: 0 0 0 10px;
}
tr:last-child td:last-child {
border-radius: 0 0 10px 0;
}
tr td:last-child {
border-right: none;
}
tr:hover td {
  text-decoration: underline;
}

	</style>
	<link href="css/bootstrap.css" rel="stylesheet">
</head>
<body>
<h1 align="center">Выбирите месяц и год отчета</h1>
<div align="center">
<form action="index.php" method="get">
	<input name="month" placeholder="месяц" size="30%"><br><br>
	<input name="year" placeholder="год" size="30%"><br><br>
	<button class="send" style="margin-top: 50px" name="show_report">Показать</button><br>
	<button class="send" style="margin-top: 50px" name="show_all_reports">Показать все отчеты</button><br>
	<button class='send' style='margin-top: 50px' name='return_to_menu'>В меню</button>
</form>
</div>
</body>
</html>