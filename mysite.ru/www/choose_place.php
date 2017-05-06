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

<h1>Выберите место</h1>
<hr>
<form action="index.php" method="get">
<?php
	//echo "<input name=time value=".$sell_date.">";
	$query_ticket = "SELECT T_ID AS data_place, T_Row, T_Place, Solved FROM `ticket` WHERE (S_ID = ".$_SESSION['sell_date'].")/*(SELECT S_ID FROM `seance` WHERE(BeginTime =  $sell_date)))*/";
	$res_ticket = mysql_query($query_ticket);
	$pl = 0;
	$r = 1;
	echo "<p>";
		echo "<input placeholder = 'ряд' name='row'>";
		echo "<input placeholder = 'место' name='place'>";
	echo "</p>";


	$query = "SELECT NumPlaces FROM seance JOIN hall USING(H_ID) WHERE (S_ID = ".$_SESSION['sell_date'].")/*(SELECT S_ID FROM `seance` WHERE(BeginTime = $sell_date/)))*/";
	$res = mysql_query($query);
	$places = mysql_fetch_array($res);
	echo "".$places['NumPlaces']."<br>";

	echo "<table border='1' cellspacing='5'>";
	echo "<tr>"; 

	while($pl <= $places['NumPlaces']/10){
		if($pl == 0)
			echo "<td height='20' width='20'>	</td>";
		else{
			echo "<td>".$pl."</td>";
		}
		$pl = $pl + 1;
	}
	$pl = 0;
	$check = 0;
	echo "</tr>";
	while($r <= 10)
	{
		echo "<tr>";
			while($pl <= $places['NumPlaces']/10){
				if($pl == 0){
					echo "<td height='20' width='20'>".$r."</td>";
				}
				else{
					$row_ticket = mysql_fetch_array($res_ticket);
					if($row_ticket['Solved'] == YES)
						echo "<td bgcolor='#FF0000'>	</td>";
					else
						echo "<td bgcolor='#FFFFFF'>	</td>";
				}
				$pl = $pl  + 1;
			}
		echo "</tr>";
		$r = $r + 1;
		$pl = 0;
	}
	echo "</table>";
	
?>
<button class="send" style="margin-top: 50px" name="next_data3">Далее</button>
<br>
<button class="send" style="margin-top: 50px" name="return_to_menu">В меню</button>
</form>
</div>
<hr>

</body>
</html>