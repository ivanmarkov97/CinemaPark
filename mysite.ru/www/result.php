<?php
$query = "UPDATE ticket SET Solved = 'YES' WHERE (T_ID = ".$_SESSION['ticket_ID'].")";
$res = mysql_query($query);
if($_SESSION['PName'] == 'cassir')
		{
			include 'menu_cassir.php';
			exit();
		}
		if($_SESSION['PName'] == 'admin')
		{
			include 'menu_admin.php';
			exit();
		}
		if($_SESSION['PName'] == 'director')
		{
			include 'menu_director.php';
			exit();
		}
?>