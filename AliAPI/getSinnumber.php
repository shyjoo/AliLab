<?php
$queryID = 2;
$APIKey = "";
$FirstName = "";
$LastName = "";
$sqlName = "";

if (!isset($resultObj))
    $resultObj = new stdClass();

require 'fatalError.php';
require 'APIcon.php';

if (!isset($_GET['APIKey']) || !isset($_GET['FirstName']) || !isset($_GET['LastName']) && !$fatalError)
{
  $resultObj->ErrorCode = 301;
  $resultObj->Message = "Parameter Error";
}
else {
  $APIKey = $_GET['APIKey'];
  $FirstName = $_GET['FirstName'];
  $LastName = $_GET['LastName'];

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

          $sqlName = $row['name'];
          $sqlType = $row['type'];

          if ($sqlType != "bank" && $sqlType != "super") {
            $resultObj->ErrorCode = 204;
            $resultObj->Message = "Only Bank can get SinNumber";
          }
          else {
            $sql = "SELECT sin FROM user WHERE firstName=\"" . $FirstName . "\" AND lastName=\"" . $LastName . "\"";
            $result = $con->query($sql);

            if(!$result)
            {
              $resultObj->ErrorCode = 101;
              $resultObj->Message = "Query Error";
            }
            else {
              $row = $result->fetch();

              if ($row == 0) {
                $resultObj->ErrorCode = 205;
                $resultObj->Message = "Dosen&rsquo;t have Name.";
              }
              else {
                $resultObj->ErrorCode = 100;
                $resultObj->Message = "";
                $resultObj->SinNumber = $row['sin'];
              }

            }

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

$sql = "INSERT INTO log (agencyName, queryDate, queryID , param1, param2, param3, errorCode, message) VALUES ('". $sqlName . "','" . date("Y-m-d h:i:sa"). "', '" . $queryID . "','" . $APIKey . "','" . $FirstName . "','" . $LastName . "','". $ErrorCode . "','" . $Message . "')";

$con->exec($sql);

$con = null;
 ?>
