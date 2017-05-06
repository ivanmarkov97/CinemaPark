<?php
if(!isset($_SESSION['login']) or !isset($_SESSION['password'])){
	include '../login.php';
	exit();
}
?>
<?php

$hallquery = "SELECT HName FROM hall WHERE (H_ID = $h_id)";
$hallres = mysql_query($hallquery);
$hname = mysql_fetch_array($hallres);
$hallname = "'".$hname['HName']."'";
/*echo "".$hallname."";
echo "".$film."<br>";
echo "".$genre."<br>";
echo "".$duration."<br>";
echo "".$limit."<br>";
echo "".$producer."<br>";
echo "".$h_id."<br>";
echo "".$hallname."<br>";
echo "".$s_id."<br>";
echo "".$cost."<br>";
echo "".$time."<br>";
echo "".$date."<br>";
echo "".$format."<br>";*/

$filmquery = "SELECT F_ID FROM film WHERE FName = $film";
$filmres = mysql_query($filmquery);
$row = mysql_fetch_array($filmres);
if($row['F_ID'])
{
	$f_id = $row['F_ID'];
	echo "f_ID = ".$f_id."<br>";
}
else
{
	$f_id = NULL;
	//echo "f_ID = ".$f_id." (NULL)<br>";
	$film_add_query = "INSERT INTO film VALUES(NULL, $film, $genre, $duration, $limit, $producer)";
	$film_add_res = mysql_query($film_add_query);
	$fid_query = "SELECT MAX(F_ID) from film";
	$fid_query_res = mysql_query($fid_query);
	$fid_row = mysql_fetch_array($fid_query_res);
	//echo "".$fid_row['MAX(F_ID)']."<br>";
	$f_id = $fid_row['MAX(F_ID)'];
}

$seance_time = "'".$date." ".$time."'";
//echo "".$seance_time."<br>";

$seance_test = "SELECT BeginTime, H_ID FROM seance WHERE(BeginTime = $seance_time AND H_ID = $h_id)";
$seance_test_res = mysql_query($seance_test);
if ($seance_test_row = mysql_fetch_array($seance_test_res)) {
	include 'redact_timetable.php';
}
else
{
	$seance_test_row = mysql_fetch_array($seance_test_res);

	$seance_add_query = "INSERT INTO seance VALUES(NULL, $seance_time, $format, $cost, $h_id, $f_id)";
	$seance_add_query_res = mysql_query($seance_add_query);

	$seance_new_id = "SELECT MAX(S_ID) FROM seance";
	$seance_new_id_res = mysql_query($seance_new_id);
	$seance_new_id_row = mysql_fetch_array($seance_new_id_res);
	$s_id = $seance_new_id_row['MAX(S_ID)'];
	//echo "s_id = ".$s_id."<br>";
	//echo "f_id = ".$f_id."<br>";
	$time = "'".$time."'";
	$date = "'".$date."'";
	$query = "INSERT INTO timetable VALUES(NULL, $film, $genre, $duration, $limit, $producer, $h_id, $hallname, $s_id, $cost, $time, $date)";
	$res = mysql_query($query);
	//$row = mysql_fetch_array($res);

	include 'redact_timetable.php';
}
/*$seance_test_row = mysql_fetch_array($seance_test_res);

$seance_add_query = "INSERT INTO seance VALUES(NULL, $seance_time, $format, $cost, $h_id, $f_id)";
$seance_add_query_res = mysql_query($seance_add_query);

$seance_new_id = "SELECT MAX(S_ID) FROM seance";
$seance_new_id_res = mysql_query($seance_new_id);
$seance_new_id_row = mysql_fetch_array($seance_new_id_res);
$s_id = $seance_new_id_row['MAX(S_ID)'];
echo "s_id = ".$s_id."<br>";
echo "f_id = ".$f_id."<br>";
$time = "'".$time."'";
$date = "'".$date."'";

echo "test!!!<br>";
echo "".$f_id."<br>";
echo "".$film."<br>";
echo "".$genre."<br>";
echo "".$duration."<br>";
echo "".$limit."<br>";
echo "".$producer."<br>";
echo "".$h_id."<br>";
echo "".$hallname."<br>";
echo "".$s_id."<br>";
echo "".$cost."<br>";
echo "".$time."<br>";
echo "".$date."<br>";
echo "".$format."<br>";

$query = "INSERT INTO timetable VALUES(NULL, $film, $genre, $duration, $limit, $producer, $h_id, $hallname, $s_id, $cost, $time, $date)";
$res = mysql_query($query);
$row = mysql_fetch_array($res);

include 'redact_timetable.php';*/

?>