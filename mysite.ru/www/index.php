<?php
session_start();
if(!isset($_SESSION['login']) and !isset($_SESSION['password'])){
	header('Location: ./auth');
	exit();
}
include 'dbconect.php';

if(isset($_POST['report']))
	{
		header('Location: ./report');
		exit();
	}
if(isset($_POST['timetable']))
	{
		header('Location: ./timetable');
		exit();
	}
if(isset($_POST['exit']))
	{
		header('Location: ./auth');
		exit();
	}
if(isset($_POST['sell']))
	{
		include 'choose_film.php';
		exit();
	}
if(isset($_POST['retry_login']))
{	
	header('Location: ./auth');
	exit();
}
if(isset($_POST['data']))
	{
		if($_POST['bnt'] == NULL){
			include 'choose_film.php';
			exit();
		}
		$_SESSION['s_id'] = "".$_POST['bnt']."";
		$s_id = "".$_POST['bnt']."";
		include 'choose_seance.php';
		exit();
	}
if(isset($_POST['next_data']))
	{
		if($_POST['seances'] != NULL){
			$_SESSION['seances'] = "'".$_POST['seances']."'";
			$sell_date = "'".$_POST['seances']."'";
			$_SESSION['sell_date'] = "'".$_POST['seances']."'";
			include 'choose_place.php';
			exit();
		}
		else{
			include 'choose_seance.php';
			exit();
		}
	}

if(isset($_GET['next_data3']))
	{
		if($_GET['row'] == NULL or $_GET['place'] == NULL){
			include 'choose_place.php';
			exit();
		}
		$_SESSION['row_select'] = $_GET['row'];
		$_SESSION['place_select'] = $_GET['place'];
		$_SESSION['time'] = $_GET['time'];
		include 'ok.php';
		exit();
	}
if(isset($_POST['next_data4'])){

	include 'result.php';
	exit();
}
if(isset($_GET['return_to_menu']) or isset($_POST['return_to_menu']))
	{
		if($_SESSION['PName'] == 'cassir')
		{
			include 'menu_cassir.php';
			exit();
		}
		if($_SESSION['PName'] == 'admin')
		{
			include 'menu_cassir.php';
			exit();
		}
		if($_SESSION['PName'] == 'director')
		{
			include 'menu_cassir.php';
			exit();
		}
	}

if(isset($_GET['search_film_button'])){
	if($_GET['search_film_button'] == 'Джейсон Борн' or $_GET['search_film_button'] == 'Jason Bourne'){
		include 'templates/about_film_BORN.html';
		exit();
	}
	if($_GET['search_film_button'] == 'Алиса в зазеркалье' or $_GET['search_film_button'] == 'Alice'){
		include 'templates/about_film_ALICE.html';
		exit();
	}
	if($_GET['search_film_button'] == 'Союзники' or $_GET['search_film_button'] == 'Alies'){
		include 'templates/about_film_ALIES.html';
		exit();
	}
	if($_GET['search_film_button'] == 'Другой мир' or $_GET['search_film_button'] == 'Underworld'){
		include 'templates/about_film_UNDERWORLD.html';
		exit();
	}
	if($_GET['search_film_button'] == 'Скайлан' or $_GET['search_film_button'] == 'Skyline'){
		include 'templates/about_film_SKYLINE.html';
		exit();
	}
	if($_GET['search_film_button'] == 'Дориан Грей' or $_GET['search_film_button'] == 'Dorian Grey'){
		include 'templates/about_film_DORIAN.html';
		exit();
	}
	if($_GET['search_film_button'] == 'Стартрек' or $_GET['search_film_button'] == 'Startrack'){
		include 'templates/about_film_STARTRACK.html';
		exit();
	}
	if($_GET['search_film_button'] == 'Эластико' or $_GET['search_film_button'] == 'Elastiko'){
		include 'templates/about_film_ELASTIKO.html';
		exit();
	}
}
include 'choose_menu.php';
?>