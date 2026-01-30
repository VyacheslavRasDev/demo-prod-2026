<?php

$router->get('/', 'index.php');

$router->get('/register', 'registration/create.php')->only('guest');
$router->post('/register', 'registration/store.php')->only('guest');

$router->get('/session', 'session/create.php')->only('guest');
$router->post('/session', 'session/store.php')->only('guest');
$router->delete('/session', 'session/destroy.php')->only('auth');

$router->get('/claims', 'claims/index.php')->only('auth');
$router->get('/claim', 'claims/claim.php')->only('auth');
$router->get('/claims/create', 'claims/create.php')->only('auth');
$router->get('/claim/edit', 'claims/edit.php')->only('auth');

$router->post('/claims', 'claims/store.php')->only('auth');
$router->post('/claims/create', 'claims/create.php')->only('auth');

$router->patch('/claim', 'claims/update.php')->only('auth');
$router->delete('/claim', 'claims/destroy.php')->only('auth');

