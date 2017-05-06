<?php
if(!isset($_SESSION['login']) or !isset($_SESSION['password'])){
		header('Location: ../auth/');
	exit();
}
?>
<html>
<head>
	<meta charset="uft-8">
	<link rel="stylesheet" type="text/css" href="http://mysite.ru/css/select.css">
	<style>
		 body{
		background-image: url(http://mysite.ru/images/background.jpg);
		background-size: 100%;
		background-repeat: repeat-x repeat-y;
		color: #CCCCCC;
	  }

	</style>
	<link rel="stylesheet" type="text/css" href="css/button.css">
	<link href="css/bootstrap.css" rel="stylesheet">
</head>
<body>
<h1 align="center" style="color: #CCCCCC">Просмотр расписания</h1>
<div align="center">
	<form action="index.php" method="post">
	<p style="color: #CCCCCC">Выбирите день для просомтра расписания</p>
<?php

	$query = "SELECT distinct Tdate AS date_z FROM timetable";
	$res = mysql_query($query);

	echo "<select name='timetable_list' class='selectpicker' data-width='fit' style='color: #CCCCCC'>";

	while($row = mysql_fetch_array($res)){
		echo "<option>".$row['date_z']."</option>";
	}
	echo "</select><br><br>";
?>
<button class="send" style="margin-top: 50px" name="show_timetable">Показать</button><br>
<button class="send" style="margin-top: 50px" name="redact_timetable">Редактировать</button><br>
<button class="send" style="margin-top: 50px" name="return_to_menu">В меню</button>

</div>
</form>

</body>
</html>