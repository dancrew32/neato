<?php
require_once('core/helpers.php');
require_once('core/db.php');
require_once('core/app.php');

db::init();

app::set('data', (object) array(
	'layout' => 'view/master.php',
	'title' => 'My Site',
	'meta' => (object) array(
		'author' => 'Dan Masquelier',
		'description' => 'A simple php webapp',
	),
	'googleAnalytics' => false,
	'GAC' => 'UA-XXXXX-X',
));

app::getClasses('lib');

app::setRoutes(array(
	'/'                => 'index',
	'/index'                => 'index',
	'/(?P<number>\d+)' => 'index',
//	'.*'               => 'NotFound',
));

if (!app::isAjax()) {
	echo app::view(app::get('data')->layout);	
}

db::stop();
