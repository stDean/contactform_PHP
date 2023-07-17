<?php

namespace Http\Form;

use Core\ValidationException;
use Core\Validator;

class LoginForm
{
  protected $errors = [];

  // On Login Instantly validate the form(users input)
  public function __construct(public array $attributes)
  {
    // Validate the user data
    if (!Validator::email($attributes['email'])) {
      $this->errors['email'] = 'Please provide a valid email address.';
    }

    if (!Validator::string($attributes['password'])) {
      $this->errors['password'] = 'Please provide a valid password.';
    }
  }

  public static function validate($attributes)
  {
    $instance = new static($attributes);
    // dd($instance);

    return $instance->failed() ? $instance->throw() : $instance;
  }

  public function throw()
  {
    ValidationException::throw($this->errors(), $this->attributes);
  }

  private function failed()
  {
    return count($this->errors);
  }

  public function errors()
  {
    return $this->errors;
  }

  public function error($field, $msg)
  {
    $this->errors[$field] = $msg;
    return $this;
  }
}
