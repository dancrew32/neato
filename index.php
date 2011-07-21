<?php
require_once('core/helpers.php');
require_once('core/db.php');
require_once('core/app.php');

//db::init();

# TODO: store defaults elsewhere
// Defaults
app::set('data', (object) array(
	'mode' => 'development',
	'layout' => 'view/master.php',
	'title' => 'My Site',
	'meta' => (object) array(
		'author' => 'Dan Masquelier',
		'description' => 'A simple php webapp',
	),
	'current' => (object) array(
		'page' => (object) array(
			'name' => 'Home',
			'slug' => 'home',
		),
		'user' => (object) array(
			// TODO: user data
		),
	),
	'content' => (object) array(
		'main' => '',
		'pager' => (object) array(
			'hasPager' => false,
			'length' => 10,
			'current' => 1,
		),
	),
	'navigation' => array(
		'home' => array(
			'href' => '/',
			'title' => 'Go to the Home page.',
			'value' => 'Home',
		),
		'page' => array(
			'href' => '/page',
			'title' => 'Go to the root stuff page.',
			'value' => 'pages of stuff',
		),
	),
	'googleAnalytics' => false,
	'GAC' => 'UA-XXXXX-X',
));

app::setStyles('css/base.less', 'css/base.css', app::get('data')->mode);

# TODO: autoloading
app::getClasses('lib');

# TODO: use app data navigation array to build sitemap and power routes
app::setRoutes(array(
	'/' => 'index',
	'/index' => 'index',
	'/page' => 'page',
	'/page/(?P<page>\d+)' => 'page',
));

if (!app::isAjax()) {
	echo app::view(app::get('data')->layout);	
}

//db::stop();
