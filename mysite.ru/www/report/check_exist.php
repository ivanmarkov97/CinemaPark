<?php
if(!isset($_SESSION['login']) or !isset($_SESSION['password'])){
	header('Location: ../auth');
	exit();
}

include '../dbconect.php';

if($_SESSION['report_type'] == 'profit')
{
	$query = "SELECT * FROM report WHERE (r_month = ".$_SESSION['report_month']." and r_year = ".$_SESSION['report_year'].")";
	$res = mysql_query($query);
	if($row = mysql_fetch_array($res)){
		if($row['R_ID']){
			include 'exist.html';
			exit();
		}
		else{
			include 'report_profit_show.php'; 
		}
	}
}
if($_SESSION['report_type'] == 'hall')
{
	$query = "SELECT * FROM hallreport WHERE (r_month = ".$_SESSION['report_month']." and r_year = ".$_SESSION['report_year'].")";
	$res = mysql_query($query);
	if($row = mysql_fetch_array($res)){
		if($row['R_ID']){
			include 'exist.html';
			exit();
		}
		else{
			include 'report_hall_show.php'; 
		}
	}

}
?>