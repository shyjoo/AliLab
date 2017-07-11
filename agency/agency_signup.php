<?php
if (isset($_POST["name"])&& isset($_POST["userPsw"]))
{
  $name = base64_encode($_POST["name"]);
  $pass = password_hash($_POST["userPsw"],PASSWORD_BCRYPT);
  $type = base64_encode($_POST["type"]);

$url = 'http://lilyfactory.net/AliAPI/registeAgency.php?name=' . $name . '&pass=' . $pass . '&type=' . $type;
$json = file_get_contents($url);

  $obj = json_decode($json, true);
  $ErrorCode = $obj['ErrorCode'];
  $Message = $obj['Message'];
  //echo $ErrorCode;
  if ($ErrorCode == 100) {
    $Name = base64_encode($obj['Name']);
    $Type = base64_encode($obj['Type']);
    $APIKey = $obj['APIKey'];
      $urlpath = "Location: signup_result.php?name=" . $Name . "&type=" . $Type . "&apikey=" . $APIKey;
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
function check(){
  //alert("ok");
  var form = document.form_Signup;

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
    alert("Name is only 4 ~ 12 letters!");
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
         alert("Sorry, name can be only alphabet and number");
         form.name.select();
         return;
        }
 }

//Check userid started form number
 if (!isNaN(form.name.value.substr(0,1)))
 {
      alert("Name can't not start form number!");
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
      alert("Password is only 8 ~ 10 letters!");
      //select letter for editting
      form.userPsw.select();
      return;
 }

 //Confirm Password validation -------------------------------------------------------------------------

  if (form.userPsw.value != form.confirmPsw.value)
  {
       alert("Confirm password doesn't match width Password");
       //move to focus
       form.confirmPsw.select();
       return;
  }

form.submit();
}
</script>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Sign up</h1>
    <form class="adminLogin" action="agency_signup.php" method="post" name="form_Signup">
      <table>
        <tr>
          <td>Agency Name</td>
          <td><input type="text" id="name" name="name" value="" placeholder="only 4~12 alphabet or number">
          <br>

        </td>
        </tr>
        <tr>
          <td>Password</td>
          <td><input type="password" id="userPsw"  name="userPsw" value="" placeholder="8~10 letters"></td>
        </tr>
        <tr>
          <td>Confirm Password</td>
          <td><input type="password" id="confirmPsw" name="confirmPsw"  value="" ></td>
        </tr>
        <tr>
          <td>Agency Type</td>
          <td>
            <p><input type="radio" id="type0" name="type" value="social" checked><label class="radiolabel" for = "type0">Social</label></p>
            <p><input type="radio" id="type1" name="type" value="bank"><label class="radiolabel" for = "type1">Bank</label></p>
            <p><input type="radio" id="type2" name="type" value="shopping"><label class="radiolabel" for = "type2">Shopping</label></p>
          </td>
        </tr>
      </table>
      <input type="button" name="submitbtn" value="Sign up" onclick="check()">
    </form>
  </body>
</html>
