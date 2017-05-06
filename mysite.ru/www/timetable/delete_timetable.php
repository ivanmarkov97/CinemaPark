<?php
if(!isset($_SESSION['login']) or !isset($_SESSION['password'])){
	include '../login.php';
	exit();
}
?>
<?php

$query = "DELETE FROM timetable WHERE (S_ID = $delete_timetable_row)";
$res = mysql_query($query);

include 'redact_timetable.php';
exit();

?>