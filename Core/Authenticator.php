<?php

namespace Core;

class Authenticator
{
	public function attempt($email, $password)
	{
		$user = App::resolve(Database::class)->query('select name, email, password from users where email = :email', [
			'email' => $email
		])->find();

		if (!$user) {
			return false;
		}

		if (password_verify($password, $user['password'])) {
			$this->login([
				'email' => $user['email'],
				'name'  => $user['name'],
			]);
			return true;
		}

		return false;
	}

	public function login($user)
	{
		$_SESSION['user'] = [
			'email' => $user['email'],
			'name'  => $user['name'],
		];

		session_regenerate_id(true);
	}

	public function logout()
	{
		Session::destroy();
	}
}