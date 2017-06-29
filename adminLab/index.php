
<?php
if (isset($_POST["login_msg"]))
{
  $Message = $_GET["login_msg"];
  echo "<script type=\"text/javascript\">
alert(\"" . $Message . "\");
  </script>";
}



?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Hanson Goverment Adminiostration</title>
  </head>
  <body>
    <h2>Admin Login</h2>

    <form class="" action="login_result.php" method="post">
      <input type="text" name="id" value="">
      <br>
      <input type="password" name="pass" value="">
      <br>
      <input type='hidden' name='l_token' value='<?php echo $_SESSION['fake']; ?>'>
      <input type="submit" name="login" value="Login">
    </form>
  </body>
</html>
