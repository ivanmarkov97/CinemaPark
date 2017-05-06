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
<?php
	//echo "$timetable_data_show";
	//$query = "SELECT FName, Genre, Format, H_ID, HName, S_ID, Cost, TIME(BeginTime), DATE(BeginTime) FROM `seance` JOIN `film` USING(F_ID) JOIN hall USING(H_ID) GROUP BY FName";
	$query = "SELECT * FROM timetable";
	$res = mysql_query($query);
	echo "<form action=index.php method=get>";
	echo "<table border='1' cellspacing='5'>";
		echo "<tr><td>Фильм</td><td>Жанр</td><td>Длина</td><td>Ограничение</td><td>Продюсер</td><td>Номер зала</td><td>Название зала</td><td>Номер сеанса</td><td>Цена за билет</td><td>Время</td><td>Дата</td><td></td></tr>";
		while($row = mysql_fetch_array($res)){
			echo "<tr><td>".$row['FName']."</td><td>".$row['Genre']."</td><td>".$row['Duration']."</td><td>".$row['Age_limit']."</td><td>".$row['Producer']."</td><td>".$row['H_ID']."</td><td>".$row['HName']."</td><td>".$row['S_ID']."</td><td>".$row['Cost']."</td><td>".$row['Ttime']."</td><td>".$row['Tdate']."</td><td><button name='delete' value=".$row['S_ID'].">Удалить</button></td></tr>";
		}
	echo "</table>";
	echo "<br><button class='send' style='margin-top: 50px' name='new'>Добавить</button>";
	echo "<table border='1' style='margin-top: 50px'>";
		echo "<tr><td>Фильм</td><td>Жанр</td><td>Длина</td><td>Ограничение</td><td>Продюсер</td><td>Номер зала</td><td>Цена за билет</td><td>Формат</td><td>Время</td><td>Дата</td></tr>";

		$query = "SELECT * FROM hall";
		$res = mysql_query($query);

		echo "<tr>
				<td>   	<input 		name='film_new' 	size='10%'>   	</td>
				<td>   	<input  	name='genre_new' 	size='10%'>   	</td>
				<td>   	<input  	name='duration_new'	size='10%'>  	</td>
				<td>   	<input      name='limit_new'	size='10%'>	 	</td>
				<td>   	<input 		name='producer_new'	size='10%'>		</td>
				<td>";  

		echo "<select name=hid_new>";
		while($row = mysql_fetch_array($res)){
					echo "<option value=".$row['H_ID'].">".$row['H_ID']."</option>";
				}
		echo "</select>";
		echo "


				</td>
				<td>   <input 	 	name='cost_new'	size='10%'>     </td>
				<td>   <input 		name='format_new' size='10%'>	</td>
				<td>   <input  		name='time_new'	size='10%'>     </td>
				<td>   <input  		name='date_new'	size='10%'>   	</td>
			  </tr>";
	echo "</table>";
	echo "<button class='send' style='margin-top: 50px' name='return_to_menu'>В меню</button>";
	echo "</form>"
?>

</div>
</body>
</html>