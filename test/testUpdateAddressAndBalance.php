<?php
//API Key testshopping
$url = 'http://lilyfactory.net/AliAPI/updateAddressAndBalance.php?APIKey=' . '918b247bd75322553d9036b998d1637e706b1fbe0015529ded9b1d55b2a68967&FirstName=Miju&LastName=Jang&Address=35%20Bales%20Ave.%20Toronto,%20Canada&Balance=400,000';
$json = file_get_contents($url);

  $obj = json_decode($json, true);
  $ErrorCode = $obj['ErrorCode'];
  $Message = $obj['Message'];

  if ($ErrorCode != 100) {
    echo $ErrorCode . " " . $Message;
  }
?>
