<?php
$query = "SELECT * FROM position WHERE(login = ".$_SESSION['login']." AND password = ".$_SESSION['password'].")";
$res = mysql_query($query);
$res_test = mysql_query($query);
if(!$row_test = mysql_fetch_array($res_test))
{
	include 'error_login.php';
	exit();
}
$row = mysql_fetch_array($res);
if($row['PName'] == 'cassir')
{
	$_SESSION['PName'] = 'cassir';
	include 'menu_cassir.php';
	exit();
}
if($row['PName'] == 'admin')
{
	$_SESSION['PName'] = 'admin';
	include 'menu_cassir.php';
	exit();
}
if($row['PName'] == 'director')
{
	$_SESSION['PName'] = 'director';
	include 'menu_cassir.php';
	exit();
}
else
{
	include 'error_login.php';
	exit();
}
?>