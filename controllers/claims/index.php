<?php
use Core\App;
use Core\Database;

$db = App::resolve(Database::class);


$claims = $db->query('SELECT * FROM claims')->get();

view('claims/claims.view.php', [
	'claims' => $claims,
]);
