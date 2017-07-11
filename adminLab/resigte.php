
<?php
  include('con.php');
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
      <div class="">
        <h1>Register</h1>
        <form enctype="multipart/form-data" action="register.php" method="POST">
          <table>
            <tr>
              <td>First Name</td>
              <td><input type="text" name="firstName" value="" placeholder="First Name"></td>
            </tr>
            <tr>
              <td>Last Name</td>
              <td><input type="text" name="lastName" value="" placeholder="Last Name"></td>
            </tr>
            <tr>
              <td>Sin Number</td>
              <td><input type="text" name="sinNum" value="" placeholder="Sin Number"></td>
            </tr>
            <tr>
              <td>Birthday</td>
              <td><input type="text" name="birthDay" value="" placeholder="Birth Day"></td>
            </tr>
            <tr>
              <td>State</td>
              <td>
                <input type="checkbox" name="stateIn" value="In">In<br>
                <input type="checkbox" name="stateOut" value="Out">Out<br>
              </td>
            </tr>

            <tr>
              <td></td>
              <td><input type="submit" value="Submit" name="btnsave"></td>
            </tr>
          </table>
        </form>
      </div>
      <a href="list.php">Back</a><br /><br />
  </body>
</html>
