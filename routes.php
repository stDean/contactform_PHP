<?php

$router->get('/', 'index.php')->only('guest');
$router->get('/login', 'session/create.php')->only('guest');
