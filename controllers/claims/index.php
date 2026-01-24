<?php
use Core\Database;

$config = require_once 'config.php';
$db = new Database($config['database']);

$claims = $db->query('SELECT * FROM claims')->get();


view('claims/claims.view.php', [
	'claims' => $claims,
]);