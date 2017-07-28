
 <!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Add</title>
  </head>
  <body>
    <form class="add" action="register_result.php" method="post">
      <label for="fName">First Name : </label><input type="text" name="fName" value="">
      <br>
      <label for="lName">Last Name : </label><input type="text" name="lName" value="">
      <br>
      <label for="sinNum">Sin Number : </label><input type="text" name="sinNum" value="">
      <br>
      <label for="birthDay">BirthDay : </label><input type="text" name="birthDay" value="">
      <br>
      <input type="submit" name="btnSubmit" value="ADD">
    </form>
  </body>
</html>


<?php
/*
require_once('fields.php');
require_once('validate.php');

$validate = new Validate();
$fields = $validate->getFields();

//$fields->addField('password', 'Must be at least 8 characters.');
//$fields->addField('verify');
$fields->addField('fName');
$fields->addField('lName');
$fields->addField('sinNum', 'Use 999-999-999 format.');
$fields->addField('birthDay', 'Use mm/dd/yyyy format.');

$action = filter_input(INPUT_POST, 'action');
if ($action === NULL) {
    $action = 'reset';
} else {
    $action = strtolower($action);
}

switch ($action) {
    case 'reset':

        $firstName = '';
        $lastName = '';
        $phone = '';
        $birthdate = '';

        include 'resigte.php';
        break;
    case 'resigte':
        // Copy form values to local variables

        $fName = trim(filter_input(INPUT_POST, 'fName'));
        $lName = trim(filter_input(INPUT_POST, 'lName'));
        $sinNum = filter_input(INPUT_POST, 'sinNum');
        $birthDay = filter_input(INPUT_POST, 'birthDay');

        // Validate form data
        $validate->text('fName', $fName);
        $validate->text('lName', $lName);
        $validate->sin('sinNum', $sinNum);
        $validate->birthdate('birthDay', $birthDay);

        // Load appropriate view based on hasErrors
        if ($fields->hasErrors()) {
            include 'resigte.php';
        } else {
            include 'register_result.php';
        }
        break;
}
*/
?>
