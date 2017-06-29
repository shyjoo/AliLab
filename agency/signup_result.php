<?php
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
    <h2><?php echo $agencyname ?></h2>
    <br>
     <p>Complated the regestration of agency</p>
     <br>
     <p>Please, login</p>
    <!-- <?php echo $agencytype ?>
    <br>
    <?php echo $agencyapikey ?> -->
    <div class="navi_menu">
      <button type="button" name="goMain" onclick="location.href='../index.php'">Go To Main</button>
    </div>
  </body>
</html>
