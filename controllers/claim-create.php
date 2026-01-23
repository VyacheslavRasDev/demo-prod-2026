<?php

require_once 'class/Database.php';

$config = require_once 'config.php';
$db = new Database($config['database']);



require_once 'view/claim-create.view.php';