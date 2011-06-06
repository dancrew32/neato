<?php
require_once('db.php');
require_once('helpers.php');
require_once('glue.php');
$urls = array(
	'/' => 'index',
	'/upload' => 'upload',
	'/(?P<number>\d+)' => 'index',
	'.*' => 'catchall',
);

includeFolder('lib');
glue::stick($urls);
mysql_close($dbc);
