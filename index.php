<?php
const BASE_PATH = __DIR__;

require_once BASE_PATH . '/php_interface/functions.php';

spl_autoload_register(function ($class) {
	require BASE_PATH . '/Core/' . $class . '.php';
});

require_once BASE_PATH . '/router/router.php';




