<?php
  $fatalError = false;
function shutdown() {
 if (($error = error_get_last())) {
   ob_clean();
  //  # raport the event, send email etc.
  //  header("Location: http://localhost/error-capture");
  //  # from /error-capture, you can use another redirect, to e.g. home page
  if (!isset($resultObj))
      $resultObj = new stdClass();

  $resultObj->ErrorCode = 120;
  $resultObj->Message = "Fatal Error";
  $fatalError = true;
  $resultObj = json_encode($resultObj);

  echo $resultObj;
}
}
register_shutdown_function('shutdown');


 ?>
