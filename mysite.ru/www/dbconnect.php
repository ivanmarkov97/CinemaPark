<?php
$host = 'localhost';
$database = 'cinamedatabase';
$user = 'director';
$pswd = 'director';
$dbh = mysql_connect($host,$user,$pswd) or die("can not coonect to mysql");
mysql_select_db($database) or die("can not connect to database");
?>