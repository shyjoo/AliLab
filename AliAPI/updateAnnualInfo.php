<?php
$queryID = 6;
$APIKey = "";
$Year = "";
$Purcharse = "";
$UserCount = "";
$sqlName = "";

if (!isset($resultObj))
    $resultObj = new stdClass();

  require 'fatalError.php';
  require 'APIcon.php';

if (!isset($_GET['APIKey']) || !isset($_GET['Year']) || !isset($_GET['Purcharse']) || !isset($_GET['UserCount']) && !$fatalError)
{
  $resultObj->ErrorCode = 301;
  $resultObj->Message = "Parameter Error";
}
else {
  $APIKey = $_GET['APIKey'];
  $Year = $_GET['Year'];
  $Purcharse = $_GET['Purcharse'];
  $UserCount = $_GET['UserCount'];

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

          if ($sqlType != "shopping" && $sqlType != "super") {
            $resultObj->ErrorCode = 208;
            $resultObj->Message = "Only Shopping can update Product purcharsed";
          }
          else {
            $sql = "SELECT * FROM shopping WHERE year=\"" . $Year . "\"";
            $result = $con->query($sql);

            if(!$result)
            {
              $resultObj->ErrorCode = 101;
              $resultObj->Message = "Query Error";
            }
            else {
              $row = $result->fetch();

              if ($row != 0) {
                $resultObj->ErrorCode = 209;
                $resultObj->Message = $Year . " is already existed.";
              }
              else {
                try {
                  $sql = "INSERT INTO shopping (year, agency, queryDate, purcharse, usercount) VALUES (\"" . $Year . "\", \"" . $sqlName . "\", \"" . date("Y-m-d h:i:sa") . "\", \"" . $Purcharse . "\", \"" . $UserCount . "\")";
                  $con->exec($sql);

                  $resultObj->ErrorCode = 100;
                  $resultObj->Message = "";

                } catch (PDOException $e) {
                  $resultObj->ErrorCode = 101;
                  $resultObj->Message = $e. "Query Error";
                }
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

$sql = "INSERT INTO log (agencyName, queryDate, queryID , param1, param2, param3, param4, errorCode, message) VALUES ('". $sqlName . "','" . date("Y-m-d h:i:sa"). "', '" . $queryID . "','" . $APIKey . "','" . $Year . "','" . $Purcharse . "','". $UserCount . "','". $ErrorCode . "','" . $Message . "')";

$con->exec($sql);

$con = null;
 ?>
