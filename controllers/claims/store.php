<?php

use Core\Database;
use Core\Validator;
use Core\App;


$db = App::resolve(Database::class);
$errors = [];

if (!Validator::string($_POST['description'])) {
	$errors['description'] = 'Description is too long';
}

if (!empty($errors)) {
	return view('claims/create.view.php', [
		'errors' => $errors,
	]);
}

$db->query('INSERT INTO claims (id, start_time, description) VALUES (NULL, NOW(), :description )', [
	'description' => $_POST['description'],
]);

header('Location: /claims');
die();

