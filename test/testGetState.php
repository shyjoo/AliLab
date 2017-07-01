<?php
//API Key testsocial
$url = 'http://localhost/AliAPI/getState.php?APIKey=' . 'b17ada736691f36aacbf89d425052ce74422a10744912b09332568be874536fc&FirstName=Miju&LastName=Jang';
$json = file_get_contents($url);

  $obj = json_decode($json, true);
  $ErrorCode = $obj['ErrorCode'];
  $Message = $obj['Message'];
  $State = $obj['State'];

  if ($ErrorCode == 100) {
    echo $State;
  }
  else {
    echo $ErrorCode . " " . $Message;
  }
?>
