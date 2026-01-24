<?php

function dd($data)
{
	echo "<pre>";
	var_dump($data);
	echo "</pre>";

	die();
}

function base_path(string $path = '')
: string {
	return BASE_PATH . '/' . ltrim($path, '/');
}

function view($path, $params = [])
{
	extract($params);
	require base_path('view/' . $path);
}



