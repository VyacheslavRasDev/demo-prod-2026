<?php
use Core\Database;

$config = require_once 'config.php';
$db = new Database($config['database']);


$claim = $db->query("SELECT * FROM claims where id = :id", [
	':id' => $_GET['id'],
])->find();


view('claims/claim.view.php', [
	'claim' => $claim,
]);