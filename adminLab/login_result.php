
<?php
//require 'session_check.php';

  //echo "ok";
  require 'con.php';
  $id = $_POST['id'];
  $pass = $_POST['pass'];
  $sql = "SELECT * FROM agency WHERE type=\"super\"";
  $result = $con->query($sql);
  if(!$result){
      echo('query error :'.mysql_error());
  }
  $row=$result->fetch(PDO::FETCH_ASSOC);
  $sqlname = $row['name'];
  $sqlpass = $row['pass'];
  // echo $sqlpass;
  // echo $pass;
  $verify = password_verify($pass, $sqlpass);
  if ($id == $sqlname && password_verify($pass, $sqlpass) == 1) {
    $urlpath = "Location: http://localhost/adminLab/adminMain.php?name=" . base64_encode($id);
    header($urlpath);
    die();
  }
  else
  {
    $login_msg = "Please, login again";
    $urlpath = "Location: http://localhost/adminLab/index.php?login_msg=" . $login_msg;
    header($urlpath);
    die();
  }
 $con = null;

 ?>
