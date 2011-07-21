<?php
class index {
	function GET($params) {
		$v = 'home';

		// Set View Content
		$data =& app::get('data');
		$data->currentPage = 'home';
		$data->content->main = $v;
	}
}
