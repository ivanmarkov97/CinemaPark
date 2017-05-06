<?php
if(!isset($_SESSION['login']) or !isset($_SESSION['password'])){
		header('Location: .auth/');
	exit();
}
?>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="http://mysite.ru/css/table.css">
	<link rel="stylesheet" type="text/css" href="http://mysite.ru/css/select.css">
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

<h1>Выберите фильм</h1>
<form action="index.php" method="post">
<?php
	//session_start();
	$query = "SELECT FName, Genre, Duration, Age_limit, Producer, S_ID from timetable GROUP BY FName";
	$res = mysql_query($query);
	echo "<table border='1' cellspacing='5' >";
	echo "<tr><td>Название</td><td>Жанр</td><td>Длительность, мин</td><td>Возрастное ограничение</td><td>Продюсер</td><td></td><tr>";
	while($row = mysql_fetch_array($res)){
		echo "<tr><td>".$row['FName']."</td><td>".$row['Genre']."</td><td>".$row['Duration']."</td><td>".$row['Age_limit']."</td><td>".$row['Producer']."</td><td><input type=checkbox name=bnt value=".$row['S_ID']."></td><tr>";
	}
	echo "</table>";
?>
<button class="send" style="margin-top: 50px" name="data">Далее</button>
<br>
<button class="send" style="margin-top: 50px" name="return_to_menu">В меню</button>
</form>

</div>


</body>
</html>