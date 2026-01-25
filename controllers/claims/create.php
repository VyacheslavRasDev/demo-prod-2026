<?php
use Core\Database;
use Core\Validator;

$config = require 'config.php';
$db     = new Database($config['database']);

$errors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

	if (!Validator::string($_POST['description'])) {
		$errors['description'] = 'Description is too long';
	}

	if (empty($errors)) {
		$db->query('INSERT INTO claims (id, start_time, description) VALUES (NULL, NOW(), :description )', [
			'description' => $_POST['description'],
		]);
	}
	header('Location: /claims');
	exit();
}

view('claims/create.view.php', [
	'errors' => $errors,
]);