<?php

use Core\Authenticator;
use Http\Forms\LoginForm;

$form     = LoginForm::validate($attributes = [
	'email'    => $_POST['email'],
	'password' => $_POST['password'],
]);
$signedIn = (new Authenticator)->attempt($attributes['email'], $attributes['password']);

if (!$signedIn) {
	$form->error('email', 'Wrong email or password')->throw();
}
redirect('/');




//return view('session/create.view.php', [
//	'errors' => $form->errors(),
//	'email'  => $email
//]);

//$db = App::resolve(Database::class);

//$errors = [];
//
//if (!Validator::email($email)) {
//	$errors['email'] = 'Please provide a valid email';
//}
//
//if (!Validator::string($password)) {
//	$errors['password'] = 'Please provide a valid password';
//}
//
//if (!empty($errors)) {
//	return view('session/create.view.php', [
//		'errors' => $errors
//	]);
//
//	exit();
//}

//$user = $db->query('select name, email, password from users where email = :email', [
//	'email' => $email
//])->find();
//
//$name = $user['name'];
//
//if (!$user) {
//	return view('session/create.view.php', [
//		'errors' => [
//			'email' => 'User not found'
//		]
//	]);
//
//	exit();
//}
//
//if (password_verify($password, $user['password'])) {
//	login([
//		'email' => $email,
//		'name'  => $name
//	]);
//
//	header('Location: /');
//	exit();
//}
//
//return view('session/create.view.php', [
//	'errors' => [
//		'email' => 'User not found and password'
//	],
//	'email' => $email
//]);

