<?php
$queryID = 8;
//$APIKey = "";
$sqlName = "";

if (!isset($resultObj))
    $resultObj = new stdClass();

require 'fatalError.php';
require 'APIcon.php';



  if ($DBerror) {
    $resultObj->ErrorCode = 110;
    $resultObj->Message = "DB Connect Error";
  }
  else {

          $sql = "SELECT firstName, lastName, sin, birthDay FROM user";
          $result = $con->query($sql);

          if(!$result)
          {
            $resultObj->ErrorCode = 101;
            $resultObj->Message = "Query Error";
          }
          else {
            $resultObj->ErrorCode = 100;
            $resultObj->Message = "";
            $resultObj->People = $result->fetchAll(PDO::FETCH_ASSOC);



        }
    }


$resultObj = json_encode($resultObj);

echo $resultObj;

//$obj = json_decode($resultObj, true);
$con = null;
 ?>
