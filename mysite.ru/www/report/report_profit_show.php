<?php
if(!isset($_SESSION['login']) or !isset($_SESSION['password'])){
		header('Location: ../auth/');
	exit();
}
?>
<html>
<head>
	<style>
		 body{
		background-image: url(http://mysite.ru/images/background.jpg);
		background-size: 100%;
		background-repeat: repeat-x repeat-y;
		color: #CCCCCC;
	  }
	</style>
		  <link rel="stylesheet" type="text/css" href="http://mysite.ru/css/button.css">
		  <link rel="stylesheet" type="text/css" href="http://mysite.ru/css/table.css">
</head>
<body>
<h1 align="center">Отчет</h1>
<div align="center">
<form action="index.php" method="get">
<?php
	$query = "CALL ProfitReport(".$_SESSION['report_month'].", ".$_SESSION['report_year'].")";
	$res1 = mysql_query($query) or die("Ошибка формирования отчетаы");

	$query = "/*CALL ProfitReport($report_month, $report_year);*/ SELECT * FROM report WHERE (r_month = ".$_SESSION['report_month']." AND r_year = ".$_SESSION['report_year'].")";
	$res = mysql_query($query) or die("Ошибка формирования отчета");

	echo "<table border='1' cellspacing='5'>";
		echo "<tr><td>Номер</td><td>Фильм</td><td>Жанр</td><td>Продано билетов</td><td>Выручка</td><td>месяц</td><td>год</td></tr>";
		while($row = mysql_fetch_array($res)){
			echo "<tr><td>".$row['R_ID']."</td><td>".$row['FName']."</td><td>".$row['Genre']."</td><td>".$row['NumSolvedTickets']."</td><td>".$row['MonthProfit']."</td><td>".$row['r_month']."</td><td>".$row['r_year']."</td></tr>";
		}
	echo "</table>";


	/*$query = "SELECT TIME(BeginTime) AS data_time FROM `seance`";
	$res = mysql_query($query);

	echo "<select type=text name='seances'>";

	while($row = mysql_fetch_array($res)){
		echo "<option>".$row['data_time']."</option>";
	}
	echo "</select><br><br>";*/
?>
<button class='send' style='margin-top: 50px' name='return_to_menu'>В меню</button>
</form>
</div>
</body>
</html>