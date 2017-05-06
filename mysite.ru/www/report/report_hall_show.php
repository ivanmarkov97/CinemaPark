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
<form arction="index.php" method="get">
<?php
	$query = "CALL HallReport($report_month, $report_year)";
	$res1 = mysql_query($query);

	$query = "SELECT * FROM hallreport WHERE (r_month = ".$_SESSION['report_month']." AND r_year = ".$_SESSION['report_year'].")";
	$res = mysql_query($query);

	echo "<table border='1' cellspacing='5'>";
		echo "<tr><td>Номер зала</td><td>Название</td><td>Число мест в зале</td><td>Заполненность</td><td>месяц</td><td>год</td></tr>";
		while($row = mysql_fetch_array($res)){
			echo "<tr><td>".$row['H_ID']."</td><td>".$row['HName']."</td><td>".$row['NumPlaces']."</td><td>".$row['FillIN']."</td><td>".$row['r_month']."</td><td>".$row['r_year']."</td></tr>";
		}
	echo "</table>";
?>
<button class='send' style='margin-top: 50px' name='return_to_menu'>В меню</button>
</form>
</div>
</body>
</html>