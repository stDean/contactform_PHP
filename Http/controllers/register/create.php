<?php

use Core\Session;

view('contact.view.php', [
  'errors' => Session::get('errors')
]);
