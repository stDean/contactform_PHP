<?php

use Core\Authenticator\RegisterAuth;
use Http\Form\RegForm;


$attributes = [
  'name' => $_POST['name'],
  'email' => $_POST['email'],
  'password' => $_POST['password'],
  'cfPassword' => $_POST['cfPassword']
];

$form = RegForm::validate($attributes);

$registerUser = (new RegisterAuth)->attempt($attributes);

if (!$registerUser) {
  redirect('/login');
}

redirect('/main');
