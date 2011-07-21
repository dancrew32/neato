<?php
/*
 * Global Helper Methods
 * because 
 */

// better print_r
function pr($var) {
	echo '<pre>';
	print_r($var);
	echo '</pre>';
}

// escape strings
function e($str) {
	echo htmlspecialchars($str);
}

// escape db input
function m($str) {
	return mysql_real_escape_string($str);
}

// run sql query
function q($query) {
	return mysql_query($query);
}

// get query result
function qr($result) {
	return mysql_fetch_assoc($result);
}

// log to file
function logIt($info='', $fileName='logs/info.txt') {
	$f = fopen($fileName, 'a');
	fwrite($f, $info . '\n');
	fclose($f);
}

// make links
function makeLink(array $data) {
	return '<a href="'. $data['href'] .'">'. $data['value'] .'</a>';
}
