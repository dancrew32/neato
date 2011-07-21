<?php
class page {
	function GET($params) {
		$v = 'page';

		$data =& app::get('data');

		$data->current->page->slug = 'page';
		$data->content->main = $v;
		$data->content->pager->hasPager = true;
		$data->content->pager->current = (int) isset($params['page']) 
			? $params['page'] : $data->content->pager->current;


		if (app::isAjax()) {
			echo json_encode($data);
			# or partial
			//echo app::view('view/index.php');
		}
	}
}
