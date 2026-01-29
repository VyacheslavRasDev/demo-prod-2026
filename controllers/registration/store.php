<?php

use Core\Database;
use Core\Validator;
use Core\App;

$db     = App::resolve(Database::class);
$errors = [];

$user = $db->query('select email from users where email = :email', [
	'email' => $_POST['email']
])->find();


if ($user) {
	header('Location: /');
	exit();
} else {
	$db->query('INSERT INTO users (name, email, password, age) VALUES (:name, :email, :password,:age)', [
		'name'     => $_POST['name'],
		'email'    => $_POST['email'],
		'password' => password_hash($_POST['password'], PASSWORD_DEFAULT),
		'age'      => $_POST['age']
	]);

	$_SESSION['user'] = [
		'email' => $_POST['email'],
	];

	header('Location: /');
	exit();
}

//if (!Validator::string($_POST['name'])) {
//	$errors['name'] = 'Enter you`re name';
//}
//
//if (!Validator::string($_POST['age'], 1, 3)) {
//	$errors['age'] = 'Name must be at least 7 characters';
//}
//
//if (!Validator::email($_POST['email'])) {
//	$errors['email'] = 'Not valid email';
//}
//
//if (!Validator::string($_POST['password'], 7)) {
//	$errors['password'] = 'Password must be at least 7 characters';
//}
//
//if (!empty($errors)) {
//	return view('registration/index.view.php', [
//		'errors' => $errors,
//	]);
//}

//header('Location: /');
//die();

