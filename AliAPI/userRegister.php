<?php

//$agencycon = $_GET["con"];
//echo $agencyname . "  :  " . $agencypass . "  :  " . $agencyapikey;

require 'APIcon.php';

if (!isset($resultObj))
    $resultObj = new stdClass();

    if (!isset($_GET['firstName']) || !isset($_GET['lastName']) || !isset($_GET['sin']) || !isset($_GET['birthDay']) && !$fatalError)
    {
      $resultObj->ErrorCode = 301;
      $resultObj->Message = "Parameter Error";
    }
    else {
      $customerfname = base64_decode($_GET["firstName"]);
      $customerlname = base64_decode($_GET["lastName"]);
      $customersin = base64_decode($_GET["sin"]);
      $customerbirth = base64_decode($_GET["birthDay"]);


      if (!$DBerror) {

        $sql = "SELECT * FROM user WHERE firstName =\"" . $customerfname . "\" AND lastName =\"" . $customerlname . "\"" ;
        $result = $con->query($sql);


        if($result){
          $row = $result->fetch();
          if ($row == 0) {
            $sql = "INSERT INTO user (firstName, lastName, sin, birthDay) VALUES ('". $customerfname . "','" . $customerlname . "', '" . $customersin . "', '" . $customerbirth . "')";
            $con->exec($sql);

            $resultObj->ErrorCode = 100;
            $resultObj->Message = "";
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
    }
$resultObj = json_encode($resultObj);

echo $resultObj;

$con = null;

 ?>
