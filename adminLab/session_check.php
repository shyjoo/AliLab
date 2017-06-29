<?SESSION_START();?>
<?php
    $session_ok = false;
    $second="300"; //시간초 지정 60 = 1분 저는 넉넉히 5분으로 하겠습니다.
    $time=date("YmdHis") - $_SESSION['tokensave'];
    if(!$_SESSION['token'] || !$_SESSION['tokensave'] || !$_SESSION['fake'] || $_POST['l_token'])
    {
      echo "처음 토큰이 유효하지 않습니다.";
      exit;
    }

    if($_SESSION['tokensave']-$_SESSION['fake'] == $_POST['l_token'])
    {

    }
    else
    {
      echo "중간 토큰이 유효하지 않습니다.";
      exit;
    }
    if($time<$second)
    {
    //세션 인증 작업이 성공될때 로그인 커멘드를 집어넣으세요.
      $session_ok = true;
    }
    else
    {
      echo "요기 토큰이 유효하지 않습니다.";
      exit;
    }

?>
