<?php
// better print_r
function pr($var) {
	echo '<pre>';
	print_r($var);
	echo '</pre>';
}

// Auto Include files in a folder
function includeFolder($folder='lib') {
	foreach (glob($folder . '/*.php') as $class) {
		include $class;
	}
}

// escape strings
function e($str) {
	return htmlspecialchars($str);
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
