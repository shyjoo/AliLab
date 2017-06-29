<?SESSION_START():?>
<?php
// $_SESSION['token']=date("YmdHis"); //은근슬쩍 토큰생성 (아무에게도 안보여요. 단지 PHPSSID가 보일 뿐이지)
// $_SESSION['tokensave']=$_SESSION['token']; //토큰을 다른 세션에 저장
// $rand_token=mt_rand(1,9999);
// $_SESSION['fake']=$rand_token;//봇 테러 방지를 위한 꼼수
// $faketoken=$_SESSION['tokensave']-$_SESSION['fake'];


?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Hanson Goverment Adminiostration</title>
  </head>
  <body>
    <h2>Admin Login</h2>
    <p><?php if(isset($_GET['login_msg'])){
      echo $_GET['login_msg'];
    } ?></p>
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
