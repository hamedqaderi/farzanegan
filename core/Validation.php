<?php

namespace Farzanegan;

class Validation
{
  public $errors = [];
  
  public function validate($data, $rules)
  {
    foreach($rules as $fieldname => $rule) {
      // require required|min:5|min:3 
      $rules = explode('|', $rule);
      foreach($rules as $rule) {

        $rules = explode(":", $rule);

        $val = (count($rules) > 1) ? $rules[1] : '';
        $rule = $rules[0];
      

        $this->$rule($fieldname, $data[$fieldname], $val);
      }
    }
  }

  public function required($fieldname, $value)
  {
    if (empty(trim($value))) {
      $this->errors[] = "$fieldname field is required";
    }
  }

  public function min($fieldname, $value, $min) 
  {
    if (strlen($value) < $min) {
      $this->errors[] = "{$fieldname} field must be at least {$min} characters"; 
      return false;
    }

    return true;
  }
}