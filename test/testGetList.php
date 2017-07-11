<?php
//API Key testbank
$url = 'http://lilyfactory.net/AliAPI/getPeopleList.php?APIKey=' . '918b247bd75322553d9036b998d1637e706b1fbe0015529ded9b1d55b2a68967';

// $url = 'http://localhost/AliAPI/getPeopleList.php?APIKey=' . '918b247bd75322553d9036b998d1637e706b1fbe0015529ded9b1d55b2a68967';
$json = file_get_contents($url);

  $obj = json_decode($json, true);
  $ErrorCode = $obj['ErrorCode'];
  $Message = $obj['Message'];

  if ($ErrorCode == 100) {
    foreach($obj['People'] as $item) {
    echo 'First Name: ' . $item['firstName'] . '     ';
    echo 'Last Name: ' . $item['lastName'] . '<br />';
    }
  }
  else {
    echo $ErrorCode . " " . $Message;
  }
?>
