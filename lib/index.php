<?php
class index {
	function GET($params) {
		$query = q('select * from pages');
		$v = '';
		while ($row = qr($query)) {
			$v .= $row['title'];
			$v .= $row['content'];
			$v .= '<br/>';
		}

		// Set View Content
		$data = app::get('data');
		$data->content = $v;
		$data->digits = isset($params['number']) ? $params['number'] : null;

		app::set('data', $data);
		// TODO: organize this
		if (app::isAjax()) {
			// send back json
			echo json_encode($data);
			// or send partial
			//echo app::view('view/index.php');
		}
	}
}
