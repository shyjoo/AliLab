<?php
$agencyname = base64_decode($_GET["name"]);
$agencypass = $_GET["pass"];
$agencytype = base64_decode($_GET["type"]);
$agencyapikey = hash('sha256', $agencyname . $agencytype);

//$agencycon = $_GET["con"];
//echo $agencyname . "  :  " . $agencypass . "  :  " . $agencyapikey;

require 'APIcon.php';

if (!isset($resultObj))
    $resultObj = new stdClass();

if (!$DBerror) {

  $sql = "SELECT * FROM agency WHERE name =\"" . $agencyname . "\"";
  $result = $con->query($sql);


  if($result){
      $row = $result->fetch();
      if ($row == 0) {
        $sql = "INSERT INTO agency (name, pass, apikey, apiNY, type) VALUES ('". $agencyname . "','" . $agencypass . "', '" . $agencyapikey . "','Y', '" . $agencytype . "')";
        $con->exec($sql);

        $resultObj->ErrorCode = 100;
        $resultObj->Message = "";
        $resultObj->Name = $agencyname;
        $resultObj->Type = $agencytype;
        $resultObj->APIKey = $agencyapikey;

      }
      else {
        $resultObj->ErrorCode = 201;
        $resultObj->Message = "Name is already existed.";
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
