<?php

use Core\App;
use Core\Container;
use Core\Database;

if (session_status() === PHP_SESSION_NONE) {
	session_start();
}

$container = new Container();

$container->bind(Database::class, function (){
	 $config = require base_path('config.php');

	 return new Database($config['database']);
});

App::setContainer($container);
