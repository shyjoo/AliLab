<?php
//API Key testbank
$url = 'http://localhost/AliAPI/updateCredit.php?APIKey=' . '918b247bd75322553d9036b998d1637e706b1fbe0015529ded9b1d55b2a68967&FirstName=Miju&LastName=Jang&Credit=Good';
$json = file_get_contents($url);

  $obj = json_decode($json, true);
  $ErrorCode = $obj['ErrorCode'];
  $Message = $obj['Message'];

  if (!$ErrorCode == 100) {
    echo $ErrorCode . " " . $Message;
  }
?>
