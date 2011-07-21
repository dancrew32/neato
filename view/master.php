<!doctype html>
<!--[if lt IE 7]> <html class="ie6" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="ie7" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="ie8" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<?php if ($data->current->page->slug != 'home'): ?>
		<title><?php echo $data->navigation[$data->current->page->slug]['value']; ?> - <?php echo $data->title; ?></title>
	<?php else: ?>
		<title><?php echo $data->title; ?></title>
	<?php endif; ?>
	<meta name="description" content="<?php echo $data->meta->description; ?>">
	<meta name="author" content="<?php echo $data->meta->author; ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<div id="header">
<?php foreach($data->navigation as $nav): ?>
	<li><?php echo makeLink(array('href' => $nav['href'], 'value' => $nav['value'])); ?></li>
<?php endforeach; ?>
</div>

<div id="mainOuter"><div id="main" role="main">

	<div id="content">
		<?php echo $data->content->main; ?>
		<?php if ($data->content->pager->hasPager): ?>
			<?php include('shared/_pager.php'); ?>
		<?php endif; ?>
	</div>

	<?php if (isset($data->content->sidebarA)): ?>
		<div id="sidebarA">
			<?php echo $data->content->sidebarA; ?>	
		</div>
	<?php endif; ?>

	<?php if (isset($data->content->sidebarB)): ?>
		<div id="sidebarB">
			<?php echo $data->content->sidebarB; ?>	
		</div>
	<?php endif; ?>

</div></div>

<?php if ($data->googleAnalytics): ?>
<script>
var _gaq=[['_setAccount','<?php if ($data->GAC) { echo $data->GAC; } ?>'],['_trackPageview'],['_trackPageLoadTime']];
(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;
g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
s.parentNode.insertBefore(g,s)}(document,'script'));
</script>
<?php endif; ?> 
</body>
</html>
