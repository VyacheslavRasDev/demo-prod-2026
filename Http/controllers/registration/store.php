<?php

use Core\Database;
use Core\Validator;
use Core\App;

$db     = App::resolve(Database::class);
$errors = [];

$name = $_POST["name"];
$age = $_POST["age"];
$email    = $_POST['email'];
$password = $_POST['password'];

if (!Validator::string($name)) {
	$errors['name'] = 'Enter you`re name';
}

if (!Validator::string($age, 1, 3)) {
	$errors['age'] = 'Enter current age';
}

if (!Validator::email($email)) {
	$errors['email'] = 'Not valid email';
}

if (!Validator::string($password , 7)) {
	$errors['password'] = 'Password must be at least 7 characters';
}

if (!empty($errors)) {
	return view('registration/index.view.php', [
		'errors' => $errors,
	]);

	exit();
}

$user = $db->query('select email from users where email = :email', [
	'email' => $email
])->find();


if ($user) {
	header('Location: /');
	exit();
} else {
	$db->query('INSERT INTO users (name, email, password, age) VALUES (:name, :email, :password,:age)', [
		'name'     => $name,
		'age'      => $age,
		'email'    => $email,
		'password' => password_hash($password, PASSWORD_DEFAULT)
	]);

	login([
		'email' => $email,
	]);

	header('Location: /');
	exit();
}

