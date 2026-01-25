<?php

function dd($data)
{
	echo "<pre>";
	var_dump($data);
	echo "</pre>";

	die();
}
function abort($code = 404){

	http_response_code($code);

	require base_path("view/{$code}.php");

	die();
}
function base_path(string $path = '')
: string {
	return BASE_PATH . $path;
}

function view($path, $params = [])
{
	extract($params);
	require base_path('/view/' . $path);
}



