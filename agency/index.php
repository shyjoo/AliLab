<?php
session_start();
if(!isset($_SESSION['is_login']))
{
    header('Location: ./index.php');
}

$agencyname = base64_decode($_GET["name"]);
$agencytype = base64_decode($_GET["type"]);
$agencyapikey = $_GET["apikey"];
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div class="navi_menu">

    </div>
    <h2> Hello, <?php echo $agencyname ?></h2>
    <br>
    Agency Type : <?php echo $agencytype ?>
    <br>
    APIKey : <?php echo $agencyapikey ?>

  </body>
</html>
