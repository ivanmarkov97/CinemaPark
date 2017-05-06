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
<h1 align="center">Расписание</h1>
<div align="center">
<form action="index.php" method="post">
<?php
	//echo "$timetable_data_show";
	$query = "SELECT FName, Genre, Duration, Age_limit, Producer, H_ID, Ttime, Tdate from timetable WHERE(Tdate = $timetable_data_show)";
	//$query = "SELECT FName, Genre, Format, TIME(BeginTime), DATE(BeginTime) FROM `seance` JOIN `film` USING(F_ID) WHERE (DATE(BeginTime) = $timetable_data_show) GROUP BY FName";
	//$query = "SELECT * FROM timetable";
	$res = mysql_query($query);

	echo "<table border='1' cellspacing='5'>";
		echo "<tr><td>Фильм</td><td>Жанр</td><td>Номер зала</td><td>Длина</td><td>Ограничение</td><td>Продюсер</td><td>Время</td><td>Дата</td></tr>";
		while($row = mysql_fetch_array($res)){
			echo "<tr><td>".$row['FName']."</td><td>".$row['Genre']."</td><td>".$row['H_ID']."</td><td>".$row['Duration']."</td><td>".$row['Age_limit']."</td><td>".$row['Producer']."</td><td>".$row['Ttime']."</td><td>".$row['Tdate']."</td></tr>";
		}
	echo "</table>";
?>
<button class='send' style='margin-top: 50px' name='return_to_menu'>В меню</button>
</form>
</div>
</body>
</html>