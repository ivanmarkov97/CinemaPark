<?php
session_start();
if(!isset($_SESSION['login']) or !isset($_SESSION['password'])){
	header('Location: ../auth/');
	exit();
}

include '../dbconect.php';

if(isset($_GET['return_to_menu']))
{
	unset($_SESSION['report_year']);
	unset($_SESSION['report_month']);
	header('Location: ../');
	//include 'menu.php';
	exit();
}

if(isset($_GET['show_report']))
	{
		$_SESSION['report_month'] = $_GET['month'];
		$_SESSION['report_year'] = $_GET['year'];

		$report_month = $_GET['month'];
		$report_year = $_GET['year'];
		
		if($_GET['report_type']=='profit'){
			$_SESSION['report_type'] = 'profit';
			$rep = 'profit';
			include 'check_exist.php';
			include 'report_profit_show.php'; 
			exit();
		}
		if($_GET['report_type']=='hall'){
			$_SESSION['report_type'] = 'hall';
			$rep = 'hall';
			include 'check_exist.php';
			include 'report_hall_show.php'; 
			exit();
		}
	}

if(isset($_GET['show_all_reports']))
{
	include 'show_all_reports.php';
	exit();
}

if(isset($_GET['show']))
{
	if($_SESSION['report_type'] == 'profit'){
		include 'report_profit_show.php'; 
		exit();	
	}
	if($_SESSION['report_type'] == 'hall'){
		include 'report_hall_show.php';  
		exit();	
	}
}
if(isset($_GET['return']))
{
	include 'choose_report.php';
	exit();
}
if($_GET['report']== NULL)
	{
		include 'choose_report.php'; 
		exit();
	}
?>