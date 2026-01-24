<?php

//function routeToController($uri, $routes)
//{
//	if (array_key_exists($uri, $routes)) {
//		require $routes[$uri];
//	} else {
//		abort();
//	}
//}
//
//function abort($code = 404)
//{
//	http_response_code($code);
//
//	require "view/{$code}.php";
//
//	die();
//}
//$routes = require_once 'router/web.php';
//
//$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
//
//routeToController($uri, $routes);

function routeToController(string $uri, array $routes): void
{
	if (array_key_exists($uri, $routes)) {
		require $routes[$uri];
		return;
	}

	abort();
}

function abort(int $code = 404): void
{
	http_response_code($code);
	require base_path("view/{$code}.php");
	die();
}

$routes = require BASE_PATH . 'routers/web.php';
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

routeToController($uri, $routes);