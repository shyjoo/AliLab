<?php
//set folder
$folder = 'userImg/'
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
      <div class="">
        <h1>Sign up</h1>
        <form enctype="multipart/form-data" action="signup.php" method="POST">
        <input name="ImgInput" class="input" type="file" id="ImgInput" />
          <input type="text" name="userID" value="" placeholder="User ID">
          <br>
          <input type="text" name="userName" value="" placeholder="User Full Name">
          <br>
          <input type="password" name="pass" value="" placeholder="Password">
          <br>
          <input type="password" name="confirmPass" value="" placeholder="Confirm Password">
          <br>
          <br>
          <input type="submit" name="submit" value="Sign up">
        </form>
      </div>
  </body>
</html>
