<?php
$queryID = 1;
$APIKey = "";
$sqlName = "";

if (!isset($resultObj))
    $resultObj = new stdClass();

require 'fatalError.php';
require 'APIcon.php';

if (!isset($_GET['APIKey']) && !$fatalError)
{
  $resultObj->ErrorCode = 301;
  $resultObj->Message = "Parameter Error";
}
else {
  $APIKey = $_GET['APIKey'];

  if ($DBerror) {
    $resultObj->ErrorCode = 110;
    $resultObj->Message = "DB Connect Error";
  }
  else {
    $sql = "SELECT * FROM agency WHERE apikey=\"". $APIKey ."\"";
    $result = $con->query($sql);

    if(!$result)
    {
      $resultObj->ErrorCode = 101;
      $resultObj->Message = "Query Error";
    }
    else {
        $row=$result->fetch(PDO::FETCH_ASSOC);
        if ($row == 0) {
          $resultObj->ErrorCode = 203;
          $resultObj->Message = "Dosen&rsquo;t have APIKey";
        }
        else {
          //$result->free();
          $sqlName = $row['name'];
          $sqlType = $row['type'];

          $sql = "SELECT firstName, lastName FROM user";
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
    }
  }
}
$resultObj = json_encode($resultObj);

echo $resultObj;

$obj = json_decode($resultObj, true);
$ErrorCode = $obj['ErrorCode'];
$Message = $obj['Message'];

$sql = "INSERT INTO log (agencyName, queryDate, queryID , param1, errorCode, message) VALUES ('". $sqlName . "','" . date("Y-m-d h:i:sa"). "', '" . $queryID . "','" . $APIKey . "','" . $ErrorCode . "','" . $Message . "')";

$con->exec($sql);

$con = null;
 ?>
