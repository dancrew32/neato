<?php
class db {
	public function init() {
		$dbu = 'root';
		$dbp = 'root';
		$dbh = 'localhost';
		$dbc = mysql_connect($dbh, $dbu, $dbp)
			or die('db offline');
		app::set('dbc', $dbc); 
		app::set('db', mysql_select_db('glue', $dbc));
	}

	public function stop() {
		mysql_close(self::get('dbc'));
	}

	public function insert() { }
	public function get() { }
}

