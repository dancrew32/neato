<?php
class db {
	public function init() {
		$dbu = 'root';
		$dbp = 'root';
		$dbh = 'localhost';
		$dbn = 'glue';
		$dbc = mysql_connect($dbh, $dbu, $dbp)
			or die('db offline');
		app::set('dbc', $dbc); 
		app::set('db', mysql_select_db($dbn, $dbc));
	}

	public function stop() {
		$dbc = app::get('dbc');
		mysql_close($dbc);
	}

	public function insert() { }
	public function get() { }
}

