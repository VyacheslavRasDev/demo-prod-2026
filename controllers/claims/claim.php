<?php
use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$claim = $db->query("SELECT * FROM claims where id = :id", [
	':id' => $_GET['id'],
])->find();


view('claims/claim.view.php', [
	'claim' => $claim,
]);