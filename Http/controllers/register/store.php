<?php

use Core\App;
use Core\Database;
use Core\Validator;

$db = App::resolve(Database::class);

$errors = [];

if (!Validator::email($_POST['email'])) {
  $errors['email'] = "Please provide a valid email address";
}

if (!Validator::string($_POST['name'], 6, 255)) {
  $errors['name'] = "Name Cannot be blank.";
}

if (!Validator::string($_POST['password'], 6, 255)) {
  $errors['password'] = "Please enter password with 6 or more characters.";
}

if ($_POST['password'] !== $_POST['cfPassword']) {
  $errors['password'] = "Password don't match";
}

if (!empty($errors)) {
  return view("contact.view.php", [
    'errors' => $errors
  ]);
}

$user = $db->query('SELECT * FROM users WHERE email=:email', [
  'email' => $_POST['email']
])->find();

if ($user) {
  redirect('/login');
} else {
  // create a new user
  $db->query('INSERT INTO users (name, email, password) VALUES (:name, :email, :password)', [
    'name' => $_POST['name'],
    'email' => $_POST['email'],
    'password' => password_hash($_POST['password'], PASSWORD_BCRYPT)
  ]);

  login([
    'email' => $_POST['email'],
    'name' => $_POST['name']
  ]);
  redirect('/main');
}
