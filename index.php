<?php

require_once 'php_interface/functions.php';
require_once 'router/router.php';
require 'class/Database.php';

$config = require 'config.php';

$database = new Database($config['database']);

$claims   = $database->query("SELECT * FROM claims where id = 1")->fetch();

require 'views/index.view.php';

