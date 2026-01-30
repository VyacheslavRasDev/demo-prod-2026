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

function login ($user){
	$_SESSION['user'] = [
		'email' => $user['email'],
		'name' => $user['name'],
	];

	session_regenerate_id(true);
}

function logout() {
	$_SESSION = [];
	session_destroy();

	$params = session_get_cookie_params();
	setcookie('PHPSESSID', '', time() - 3600, $params['path'], $params['domain'], $params['secure'], $params['httponly']);

}



