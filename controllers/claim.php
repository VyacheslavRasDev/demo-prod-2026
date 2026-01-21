<?php

require_once 'class/Database.php';

$config = require_once 'config.php';
$db = new Database($config['database']);



$claim = $db->query("SELECT * FROM claims where id = :id", [
	':id' => $_GET['id'],
])->fetch();


require_once 'views/claim.view.php';