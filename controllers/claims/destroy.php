<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);


$db->query("SELECT * FROM claims where id = :id", [
	':id' => $_POST['id'],
]);

$db->query('DELETE FROM claims WHERE id = :id', [
	':id' => $_POST['id'],
]);

header('Location: /claims');
exit();
