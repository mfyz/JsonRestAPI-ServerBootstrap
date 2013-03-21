<?php

$app->get('/', function () use ($app) {
	$app->render(array('greeting' => 'hello!'));
});


$app->get('/return', function () use ($app) {
	$app->render(array(
		$app->request()->getMethod(),
		$app->request()->headers(),
		$app->request()->params(),
		$app->request()->get('name')
	));
});


$app->get('/404', function () use ($app) {
	$app->render(array(
		'error' => TRUE,
		'alert' => 'Not found!'
	), 404);
});


$app->get('/500', function () use ($app) {
	$app->render(array(
		'success' => FALSE,
		'time'    => time()
	), 500);
});


$app->post('/post', function () use ($app) {

});


$app->put('/put', function () use ($app) {

});


$app->delete('/delete', function () use ($app) {
	throw new Exception('Shit happens!');
});
