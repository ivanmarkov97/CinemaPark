<?php
session_start();
if(!isset($_SESSION['login']) or !isset($_SESSION['password'])){
	header('Location: ../auth/');
	exit();
}

include '../dbconect.php';

if(isset($_POST['show_timetable']))
	{
		$_SESSION['timetable_data_show'] = "'".$_POST['timetable_list']."'";
		//echo "".$_SESSION['timetable_data_show']."<br>";
		$timetable_data_show = "'".$_POST['timetable_list']."'";
		include 'timetable_show.php'; exit();
	}
if(isset($_POST['redact_timetable']))
	{
		//$timetable_data_show = "'".$_GET['timetable_list']."'";
		include 'redact_timetable.php'; 
		exit();
	}
if(isset($_GET['new']))
	{

		$_SESSION['film_new'] = "'".$_GET['film_new']."'";
		$_SESSION['genre_new'] = "'".$_GET['genre_new']."'";
		$_SESSION['duration_new'] = $_GET['duration_new'];
		$_SESSION['limit_new'] = $_GET['limit_new'];
		$_SESSION['producer_new'] =  "'".$_GET['producer_new']."'";
		$_SESSION['h_id_new'] = $_GET['hid_new'];
		$_SESSION['s_id_new'] = $_GET['sid_new'];
		$_SESSION['cost_new'] = $_GET['cost_new'];
		$_SESSION['format_new'] = "'".$_GET['format_new']."'";
		$_SESSION['time_new'] = $_GET['time_new'];
		$_SESSION['date_new'] = $_GET['date_new'];

		$film = "'".$_GET['film_new']."'";
		$genre = "'".$_GET['genre_new']."'";
		$duration = $_GET['duration_new'];
		$limit = $_GET['limit_new'];
		$producer = "'".$_GET['producer_new']."'";
		$h_id = $_GET['hid_new'];
		$s_id = $_GET['sid_new'];
		$cost = $_GET['cost_new'];
		$format = "'".$_GET['format_new']."'";
		$time = $_GET['time_new'];
		$date = $_GET['date_new'];
		include 'add_into_table.php';
		exit();
	}

if(isset($_GET['delete']))
{
	//echo "delete S_ID = ".$_GET['delete']."<br>";
	$_SESSION['delete_timetable_row'] = $_GET['delete'];
	$delete_timetable_row = $_GET['delete'];
	include 'delete_timetable.php';
}

if(isset($_GET['return_to_menu']) or isset($_POST['return_to_menu']))
{
	
	unset($_SESSION['film_new']);
	unset($_SESSION['genre_new']);
	unset($_SESSION['duration_new']);
	unset($_SESSION['limit_new']);
	unset($_SESSION['producer_new']);
	unset($_SESSION['h_id_new']);
	unset($_SESSION['s_id_new']);
	unset($_SESSION['cost_new']);
	unset($_SESSION['format_new']);
	unset($_SESSION['time_new']);
	unset($_SESSION['date_new']);
	unset($_SESSION['timetable_data_show']);
	unset($_SESSION['delete_timetable_row']);
	if($_SESSION['PName'] == 'cassir')
		{
			header('Location: ../');
		}
		if($_SESSION['PName'] == 'admin')
		{
			header('Location: ../');
		}
		if($_SESSION['PName'] == 'director')
		{
			header('Location: ../');
		}
	exit();
}
if($_GET['timetable']== NULL)
	{
		if($_SESSION['PName'] != 'cassir')
			include 'timetable.php'; 
		else
			include 'timetable_cassir.php';
		exit();
	}
?>