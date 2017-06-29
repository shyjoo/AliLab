<?php
$agencyname = base64_decode($_GET["name"]);
$agencypass = base64_decode($_GET["pass"]);

require 'fatalError.php';
require 'APIcon.php';

if (!isset($resultObj))
    $resultObj = new stdClass();

if (!$DBerror) {
  $sql = "SELECT * FROM agency WHERE name=\"". $agencyname ."\"";
  $result = $con->query($sql);

  if($result){
      $row=$result->fetch(PDO::FETCH_ASSOC);
      $sqlname = $row['name'];
      $sqlpass = $row['pass'];
      //$verify = password_verify($agencypass, $sqlpass);

      if ($agencyname == $sqlname && password_verify($agencypass, $sqlpass) == 1)
      {
        $resultObj->ErrorCode = 100;
        $resultObj->Message = "";
        $resultObj->Name = $row['name'];
        $resultObj->Type = $row['type'];
        $resultObj->APIKey = $row['apikey'];
      }
      else {
        $resultObj->ErrorCode = 202;
        $resultObj->Message = "Incorrect Name or Password. Please, again...";
      }
  }
  else {
    $resultObj->ErrorCode = 101;
    $resultObj->Message = "Query Error";
  }

}
else {
  $resultObj->ErrorCode = 110;
  $resultObj->Message = "DB Connect Error";
}

$resultObj = json_encode($resultObj);

echo $resultObj;

$con = null;

 ?>
