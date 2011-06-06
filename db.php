<?php

$dbu = 'root';
$dbp = 'root';
$dbh = 'localhost';
$dbc = mysql_connect($dbh, $dbu, $dbp) 
	or die('db offline');
$db = mysql_select_db('glue', $dbc);
