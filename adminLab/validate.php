<?php
class Validate{
    private $fields;

    public function __construct() {
        $this->fields = new Fields();
    }

    public function getFields() {
        return $this->fields;
    }


    // Validate a field with a generic pattern
    public function pattern($name, $value, $pattern,
          $message, $required = true) {
     // Get Field object
     $field = $this->fields->getField($name);

     // If not required and empty, clear errors
     if (!$required && empty($value)) {
         $field->clearErrorMessage();
         return;
     }
     // Check field and set or clear error message
     $match = preg_match($pattern, $value);
     if ($match === false) {
         $field->setErrorMessage('Error testing field.');
     } else if ( $match != 1 ) {
         $field->setErrorMessage($message);
     } else {
         $field->clearErrorMessage();
     }
    }



        // Validate a generic text field
    public function text($name, $value, $required = true,
                         $min = 1, $max = 255) {
        // Get Field object
        $field = $this->fields->getField($name);

        // If not required and empty, clear errors
        if (!$required && empty($value)) {
            $field->clearErrorMessage();
            return;
        }
        // Check field and set or clear error message
        if ($required && empty($value)) {
            $field->setErrorMessage('Required.');
        } else if (strlen($value) < $min) {
            $field->setErrorMessage('Too short.');
        } else if (strlen($value) > $max) {
            $field->setErrorMessage('Too long.');
        } else {
            $field->clearErrorMessage(); }
    }

    public function password($name, $value, $required = false) {
    $field = $this->fields->getField($name);

    // Call the text method
    // and exit if it yields an error
    $this->text($name, $value, $required);
    if ($field->hasError()) { return; }

    // Call the pattern method
    // to validate a phone number
    $pw_pattern = '/^(?=.*[[:digit:]])(?=.*[[:punct:]])[[:print:]]{6,}$/';
    $match = preg_match($pw_pattern, $value);
    // Returns 0
    $message = 'Must have one each of upper, lower, digit and "_".  (PYOSANG!)';
    $this->pattern($name, $value, $pw_pattern, $message, $required);
  }


      public function verify($name, $password2,  $required = false){

        $field = $this->fields->getField($name);

        if (!$required && empty($password2)) {
            $field->clearErrorMessage();
            return;
          }
          if ($required && empty($password2)) {
              $field->setErrorMessage('Required.');
          }
          elseif(strlen($required) != strlen($password2)) {
            $field->setErrorMessage('Your Password Do Not Match!');
          }
          elseif(!preg_match("#[0-9]+#", $password2)) {
            $field->setErrorMessage('Your Password Must Contain At Least 1 Number!');
          }
          elseif(!preg_match("#[A-Z]+#", $password2)) {
            $field->clearErrorMessage('Your Password Must Contain At Least 1 Capital Letter!');
          }
          elseif(!preg_match("#[a-z]+#", $password2)) {
            $field->clearErrorMessage('Your Password Must Contain At Least 1 Lowercase Letter!');
          }

        }



        public function birthdate($name, $value,$required = false) {
        $field = $this->fields->getField($name);

        // Call the text method
        // and exit if it yields an error
        $this->text($name, $value, $required);
        if ($field->hasError()) { return; }

        // Call the pattern method
        // to validate a phone number

        $pattern = '/^(0?[1-9]|1[0-2])\/'
             . '(0?[1-9]|[12][[:digit:]]|3[01])\/'
             . '[[:digit:]]{4}$/';
        $match = preg_match($pattern, $value);
        // Returns 0
        $message = 'Invalid date format.';
        $this->pattern($name, $value, $pattern, $message, $required);
      }

/*
        public function sin($name, $value,$required = false) {
        $field = $this->fields->getField($name);

        // Call the text method
        // and exit if it yields an error
        $this->text($name, $value, $required);
        if ($field->hasError()) { return; }

        // Call the pattern method
        // to validate a phone number
        $pattern =
        '/^[[:digit:]]{3}-[[:digit:]]{3}-[[:digit:]]{3}$/';

        $message = 'Invalid sin number.';
        $this->pattern($name, $value, $pattern, $message, $required);
    }
    */

}



?>
