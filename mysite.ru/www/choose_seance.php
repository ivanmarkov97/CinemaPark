<?php
if(!isset($_SESSION['login']) or !isset($_SESSION['password'])){
	header('Location: .auth/');
	exit();
}
?>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="http://mysite.ru/css/button.css">
	<link rel="stylesheet" type="text/css" href="http://mysite.ru/css/table.css">
	<style>
	 body{
		background-image: url(http://mysite.ru/images/background.jpg);
		background-size: 100%;
		background-repeat: repeat-x repeat-y;
		color: #CCCCCC;
	  }
	  button.send {
 	  	font-weight: 700;
		font-size: 20px;
  	  	color: white;
	  	width: 360px;
	  	height: 120px;
	  	border: 10px solid rgba(33,155,90, 0);
  	  	border-radius: 5px;
  	  	background: rgb(64,199,129);
  	  	box-shadow: 0 -5px rgba(53,167,110,0) inset;
	} 
	button.send:hover { background: rgb(53, 167, 110); }
	button.send:active {
  	  background: rgb(33,147,90);
  	  box-shadow: 0 3px rgb(33,155,90) inset;
	}
	</style>
</head>

<body>

<div align="center">

<h1>Выберите сеанс</h1>
<form action="index.php" method="post">
<?php

	$fname_query = "SELECT FName FROM timetable WHERE(S_ID = ".$_SESSION['s_id'].")";
	$fname_query_res = mysql_query($fname_query); 
	if(!$fname_row = mysql_fetch_array($fname_query_res))
	{
		include 'error_seance.php'; 
		exit();
	}
	$fname = $fname_row['FName'];
	//echo "$fname<br>";
	$fname = "'".$fname."'";


	$query = "SELECT FName, Tdate, Ttime, H_ID, HName, S_ID FROM timetable WHERE(FName = $fname)";
	$res = mysql_query($query);
	$res_test = mysql_query($query);
	if(!($row_test = mysql_fetch_array($res_test)))
	{
		include 'error_seance.php'; 
		exit();
	}
	else{

		echo "<table border='1' cellspacing='5' >";
		echo "<tr><td>Фильм</td><td>Время</td><td>Дата</td><td>Номер зала</td><td>Название зала</td><td></td><tr>";
		while($row = mysql_fetch_array($res)){
			echo "<tr><td>".$row['FName']."</td><td>".$row['Ttime']."</td><td>".$row['Tdate']."</td><td>".$row['H_ID']."</td><td>".$row['HName']."</td><td><input type=checkbox name=seances value=".$row['S_ID']."></td><tr>";
		}
		echo "</table><br>";

		/*echo "<select type=text name='seances'>";

		while($row = mysql_fetch_array($res)){
			echo "<option>".$row['date_z']."</option>";
		}
		echo "</select><br><br>";*/
	}
?>
<button class="send" style="margin-top: 50px" name="next_data">Далее</button>
<br>
<button class="send" style="margin-top: 50px" name="return_to_menu">В меню</button>
</form>

</div>


</body>
</html>