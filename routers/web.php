<?php

$router->get('/', 'controllers/index.php');

$router->get('/register', 'controllers/registration/create.php')->only('guest');
$router->post('/register', 'controllers/registration/store.php');

$router->get('/claims', 'controllers/claims/index.php')->only('auth');
$router->get('/claim', 'controllers/claims/claim.php');
$router->get('/claims/create', 'controllers/claims/create.php');
$router->get('/claim/edit', 'controllers/claims/edit.php');

$router->post('/claims', 'controllers/claims/store.php');
$router->post('/claims/create', 'controllers/claims/create.php');

$router->patch('/claim', 'controllers/claims/update.php');
$router->delete('/claim', 'controllers/claims/destroy.php');

