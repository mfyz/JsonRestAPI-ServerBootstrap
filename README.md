JsonRestAPI-ServerBootstrap
===========================

Minimal php rest api server app responses json objects (uses slim framework)


Install
-----------
This is a standalone php app requires no configuration. Just download and run.


Usage
-----------
You can define a new method in the router.php with any name and GET, POST, PUT, DELETE methods via
	
	$app->get('/hello', function () use ($app) {
		$app->render(array(
			'reply' => 'Hi!',
			'time' => time()
		));
	});

It responds the response object in JSON format.


Dependencies
-----------
It uses Slim framework http://www.slimframework.com