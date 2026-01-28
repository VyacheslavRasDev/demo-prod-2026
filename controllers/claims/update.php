<?php

use Core\App;
use Core\Database;
use Core\Validator;

$db = App::resolve(Database::class);

// find the corresponding note
$claim = $db->query('select * from claims where id = :id', [
	'id' => $_POST['id']
])->find();

$errors = [];

if (! Validator::string($_POST['description'])) {
	$errors['body'] = 'A body of no more than 1,000 characters is required.';
}

if (count($errors)) {
	return view('claims/edit.view.php', [
		'errors' => $errors,
		'claim' => $claim
	]);
}

$db->query('update claims set description = :description where id = :id', [
	'id' => $_POST['id'],
	'description' => $_POST['description']
]);

header('location: /claims');
die();



