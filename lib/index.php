<?php
class index {
	function GET($params) {
		$query = q('select * from pages');
		while ($row = qr($query)) {
			$v .= $row['title'];
			$v .= $row['data'];
			$v .= '<br/>';
			$v .= "aw hell naw";
		}

		// Set View Content
		$data = app::get('data');
		$data->content = $v;
		$data->digits = $params['number'];

		app::set('data', $data);
		// TODO: organize this
		if (app::isAjax()) {
			// send back json
			echo json_encode($data);
			// or send partial
			echo app::view('view/index.php');
		}
	}
}
