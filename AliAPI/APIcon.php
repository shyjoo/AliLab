<?php
$servername = "localhost";
$username = "root";
$password = "";

$DBerror = false;

$defaultTimeZone='America/Toronto';
if(date_default_timezone_get()!=$defaultTimeZone) date_default_timezone_set($defaultTimeZone);

try {
  $con = new PDO("mysql:host=$servername;dbname=id1644451_alidb",$username,$password);
  //Set the PDO error mode to Exception
  $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  //echo "Connection Successfully Established...";
}
catch (PDOException $e)
{
  //echo "Connection Failed...." . $e->getMessage();
  $DBerror = true;
}

 ?>
