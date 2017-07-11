<?php
//API Key testshopping
$url = 'http://lilyfactory.net/AliAPI/updateAnnualInfo.php?APIKey=' . '28aece4f8f8643c39a0d6dc0e8f95e717f2117b42ac20835ca211ef85d112ed8&Year=0002&Purcharse=100,000&UserCount=1,000';
$json = file_get_contents($url);

  $obj = json_decode($json, true);
  $ErrorCode = $obj['ErrorCode'];
  $Message = $obj['Message'];

  if ($ErrorCode != 100) {
    echo $ErrorCode . " " . $Message;
  }
?>
