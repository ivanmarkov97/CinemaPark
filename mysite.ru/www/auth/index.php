<?php
//$host = 'localhost';
//$database = 'cinamedatabase';
//$user = 'director';
//$pswd = 'director';
//$dbh = mysql_connect($host,$user,$pswd) or die("can not coonect to mysql");
//mysql_select_db($database) or die("can not connect to database");
session_start();
unset($_SESSION['login']);
unset($_SESSION['password']);
unset($_SESSION['PName']);
if(isset($_POST['log']))
	{
	header('Location: ../');
	$l = "'".$_POST['login']."'";
	$p = "'".$_POST['pass']."'";
	$query = "SELECT PName from position WHERE(login = ".$l." AND password = ".$p.")";
	$res = mysql_query($query);
	$row = mysql_fetch_array($res);
	$_SESSION['PName'] = "'".$row['PName']."'";
	$_SESSION['login'] = "'".$_POST['login']."'";
	$_SESSION['password'] = "'".$_POST['pass']."'";
	exit();
	}
if(isset($_SESSION['PName']))
{
	header('Location: ../');
	exit();
}
/*if(isset($_GET['retry_login']))
	{
		include 'login.php';
		exit();
	}*/
//echo "".$_SESSION['login']."<br>";
//echo "".$_SESSION['password']."<br>";
include 'login.php';
?>