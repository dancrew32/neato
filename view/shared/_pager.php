<ul class="pager">
	<?php for ($i = 1; $i <= $data->content->pager->length; $i++): ?> 
		<li><?php echo makeLink(array(
			'href' => '/' . $data->current->page->slug . '/' . $i,
			'value' => ($i == $data->content->pager->current) ? '<strong>'. $i .'</strong>' : $i,
		)); ?></li>
	<?php endfor; ?>
</ul>
