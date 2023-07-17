<?php

namespace Http\Form;

use Core\Validator;

class RegForm extends Form
{
  public function __construct($attributes)
  {
    parent::__construct($attributes);
    if (!Validator::email($attributes['email'])) {
      $this->errors['email'] = "Please provide a valid email address";
    }

    if (!Validator::string($attributes['name'], 6, 255)) {
      $this->errors['name'] = "Name Cannot be blank.";
    }

    if (!Validator::string($attributes['password'], 6, 255)) {
      $this->errors['password'] = "Please enter password with 6 or more characters.";
    }

    if ($attributes['password'] !== $attributes['cfPassword']) {
      $this->errors['password'] = "Password don't match";
    }
  }

  public static function validate($attributes)
  {
    $instance = new static($attributes);
    return $instance->failed() ? $instance->throw() : $instance;
  }
}
