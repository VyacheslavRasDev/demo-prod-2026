<?php

$router->get('/', 'controllers/index.php');
$router->get('/claim', 'controllers/claims/claim.php');
$router->get('/claims', 'controllers/claims/index.php');
$router->get('/claims/create', 'controllers/claims/create.php');

$router->post('/claims', 'controllers/claims/store.php');
$router->post('/claims/create', 'controllers/claims/create.php');

$router->delete('/claim', 'controllers/claims/destroy.php');