<?php

namespace Http\Form;

use Core\ValidationException;

abstract class Form
{
  protected $errors = [];

  public function __construct(public array $attributes) {}

  abstract public static function validate($attributes);

  protected function throw()
  {
    ValidationException::throw($this->errors(), $this->attributes);
  }

  protected function failed()
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
