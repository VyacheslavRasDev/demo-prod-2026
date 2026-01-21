<?php

require_once 'class/Database.php';

$config = require_once 'config.php';
$db = new Database($config['database']);

$claims = $db->query("SELECT * FROM claims")->fetchAll();


require_once 'views/claims.view.php';