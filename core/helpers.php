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

function qr($result) {
	return mysql_fetch_assoc($result);
}
