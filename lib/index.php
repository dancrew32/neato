<?php
class index {
	function GET($params) {
		$content = '';
		$query = q('select * from pages');
		while ($row = qr($query)) {
			$content .= $row['title'];
			$content .= '<br/>';
			$content .= $row['content'];
			$content .= '<br/>';
		}
		pr($params['number']);
	}
}
