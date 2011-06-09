<!doctype html>
<!--[if lt IE 7]> <html class="ie6" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="ie7" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="ie8" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title><?php echo $data->title; ?></title>
	<meta name="description" content="<?php echo $data->meta->description; ?>">
	<meta name="author" content="<?php echo $data->meta->author; ?>">

	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="css/base.css">
</head>
<body>

<div id="mainOuter"><div id="main" role="main">
	<?php echo $data->content; ?>
	<?php if ($data->digits): ?>
		<?php echo $data->digits; ?>
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
