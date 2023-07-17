<?php

use Core\Authenticator\LoginAuth;
use Http\Form\LoginForm;

$attributes = [
  'email' => $_POST['email'],
  'password' => $_POST['password']
];

$form = LoginForm::validate($attributes);
// dd($form);

$signIn = (new LoginAuth)->attempt($attributes);

if (!$signIn) {
  $form->error('general', 'Wrong credential entered.')->throw();
}

redirect('/main');
