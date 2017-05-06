<?php
if(!isset($_SESSION['login']) or !isset($_SESSION['password'])){
	//header('Location: localhost/mysite.ru/www/index.php');
	header('Location: .auth/');
	exit();
}
?>
<html>
<head>
	<meta charset="utf-8">
	<style>
	 body{
		background-image: url(images/background.jpg);
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

<h1>Проверка</h1>
<hr>
<form action="index.php" method="post">
<?php
/*echo "$time<br>";
echo "$row_select<br>";
echo "$place_select<br>";*/
$query = "SELECT T_ID, T_Row, T_Place, TIME(BeginTime), DATE(BeginTime), H_ID, HName FROM ticket JOIN seance USING(S_ID) JOIN hall USING(H_ID) WHERE (T_Row = ".$_SESSION['row_select']." AND T_Place = ".$_SESSION['place_select']." AND S_ID = ".$_SESSION['sell_date'].")";
$res = mysql_query($query);
$row = mysql_fetch_array($res);

echo "your row ".$row['T_Row']."<br>";
echo "your place ".$row['T_Place']."<br>";
echo "your time ".$row['TIME(BeginTime']." ".$row['DATE(BeginTime)']."<br>";
echo "your Hall number ".$row['H_ID']."<br>";
echo "your Hall Name ".$row['HName']."<br>";
$_SESSION['ticket_ID'] = $row['T_ID'];
$t_id = $row['T_ID'];
/*$s_id = $row['S_ID'];
$t_id = $row['T_ID'];
echo "$s_id<br>";*/

$query = "UPDATE ticket SET Solved = 'YES' WHERE (T_ID = $t_id)";
$res = mysql_query($query);


?>
<button class="send" style="margin-top: 50px" name="next_data4">Оплата</button>
<br>
<button class="send" style="margin-top: 50px" name="return_to_menu">В меню</button>
</form>
</div>
<hr>

</body>
</html>