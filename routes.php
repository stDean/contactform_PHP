<?php

$router->get('/', 'index.php')->only('guest');
$router->get('/main', 'main.php')->only('auth');

$router->get('/login', 'session/create.php')->only('guest');
$router->post('/session', 'session/store.php')->only('guest');
$router->delete('/session', 'session/destroy.php')->only('auth');

$router->get('/register', 'session/create.php')->only('guest');
$router->post('/register', 'register/store.php')->only('guest');
