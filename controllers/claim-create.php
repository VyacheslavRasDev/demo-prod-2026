<?php

$config = require 'config.php';
$db     = new Database($config['database']);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$errors = [];

	if (empty(trim($_POST['description']))) {
		$errors['description'] = 'Description is required';
	}

	if (strlen(trim($_POST['description'])) > 255) {
		$errors['description'] = 'Description is too long';
	}

	if (empty($errors)) {
		$db->query('INSERT INTO claims (id, start_time, description) VALUES (NULL, NOW(), :description )', [
			'description' => $_POST['description'],
		]);
	}
}

require_once 'view/claim-create.view.php';