<?php
//API Key testshopping
$url = 'http://localhost/AliAPI/updateProd_purchased.php?APIKey=' . '28aece4f8f8643c39a0d6dc0e8f95e717f2117b42ac20835ca211ef85d112ed8&FirstName=Miju&LastName=Jang&PP=100';
$json = file_get_contents($url);

  $obj = json_decode($json, true);
  $ErrorCode = $obj['ErrorCode'];
  $Message = $obj['Message'];

  if (!$ErrorCode == 100) {
    echo $ErrorCode . " " . $Message;
  }
?>
