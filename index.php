<?php
if (isset($_POST["name"]) && isset($_POST["userPsw"]))
{
  $name = base64_encode($_POST["name"]);
  $pass = base64_encode($_POST["userPsw"]);

$url = 'http://localhost/AliAPI/loginAgency.php?name=' . $name . '&pass=' . $pass;
$json = file_get_contents($url);

  $obj = json_decode($json, true);
  $ErrorCode = $obj['ErrorCode'];
  $Message = $obj['Message'];
  //echo $ErrorCode;
  if ($ErrorCode == 100) {
    session_start();
    $_SESSION['is_login'] = true;
    $_SESSION['name'] = base64_encode($obj['Name']);
    $Name = base64_encode($obj['Name']);
    $Type = base64_encode($obj['Type']);
    $APIKey = $obj['APIKey'];
      $urlpath = "Location: ../agency/index.php?name=" . $Name . "&type=" . $Type . "&apikey=" . $APIKey;
      header($urlpath);
      die();
  }
  else {
    echo "<script type=\"text/javascript\">
alert(\"" . $Message . "\");
    </script>";
  }
}
 ?>
<!DOCTYPE html>
<html>
<script type="text/javascript">
function check()
{
  var form = document.form_Signin;

   //check null
   if (form.name.value == "")
   {
           alert("Please, Input your userID!");
          //move to focus
           form.name.focus();
           return;
   }

   ///check length
   if (form.name.value.length < 4 || form.name.value.length > 12)
   {
    alert("userID is only 4 ~ 12 letters!");
    //select letter for editting
    form.name.select();
    return;
   }

 //One by One checking
 for (i=0; i<form.name.value.length; i++)
 {
   //conver char to int for checking(only samll letter)
        var ch = form.name.value.charAt(i);
        //chect each letter
        if ( ( ch < "a" || ch > "z") && (ch < "A" || ch > "Z") && (ch < "0" || ch > "9" ) )
        {
         alert("Sorry, Name can be only alphabet and number");
         form.name.select();
         return;
        }
 }

//Check userid started form number
 if (!isNaN(form.name.value.substr(0,1)))
 {
      alert("userId can't not start form number!");
      //select letter for editting
      form.name.select();
      return;
 }



//Password validation -------------------------------------------------------------------------

 if (form.userPsw.value == "")
 {
      alert("Please, Input your password!");
      //move to focus
      form.userPsw.focus();
      return;
 }


//check length
 if (form.userPsw.value.length < 8 || form.userPsw.value.length > 10)
 {
      alert("Password is only 8 ~ 10 letter!");
      //select letter for editting
      form.userPsw.select();
      return;
 }

form.submit();
}
</script>
  <head>
    <meta charset="utf-8">
    <title>Ali</title>
  </head>
  <body>

    <button name="button" onclick="location.href='/agency/agency_signup.php'">Sign up</button>

    <div class="add_form">
      <form name="form_Signin" action="index.php" method="POST">
          <p>Name</p><input type="text" id="name" name="name"><br><br>
          <p>Password</p><input id="userPsw" name="userPsw" type="password"><br>
          <input type="button" value="Sign In" onclick="check()"></div>
      </form>
   </div>

  </body>
</html>
