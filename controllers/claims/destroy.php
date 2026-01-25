<?php

use Core\Database;

$config = require_once 'config.php';
$db     = new Database($config['database']);

$db->query("SELECT * FROM claims where id = :id", [
	':id' => $_POST['id'],
]);

$db->query('DELETE FROM claims WHERE id = :id', [
	':id' => $_POST['id'],
]);

header('Location: /claims');
exit();
