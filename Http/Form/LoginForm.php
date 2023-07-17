<?php

namespace Http\Form;

use Core\Validator;

class LoginForm extends Form
{
  public function __construct($attributes)
  {
    parent::__construct($attributes);
    if (!Validator::email($attributes['email'])) {
      $this->errors['email'] = 'No user with this email.';
    }

    if (!Validator::string($attributes['password'])) {
      $this->errors['password'] = 'Incorrect password.';
    }
  }

  public static function validate($attributes)
  {
    $instance = new static($attributes);
    return $instance->failed() ? $instance->throw() : $instance;
  }
}
