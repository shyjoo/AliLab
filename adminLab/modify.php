<?php
$getId = $_GET['id'];
$fName = "";
$lName = "";
$sinNum = "";
$birthDay = "";

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "id1644451_alidb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM user WHERE id =" . $getId;
$result = $conn->query($sql);
if ($result->num_rows > 0) {

    // output data of each row
    while($row = $result->fetch_assoc()) {
      $fName = $row['firstName'];
      $lName = $row['lastName'];
      $sinNum = $row['sin'];
      $birthDay = $row['birthDay'];
    }
} else {
    echo "0 results";
}

 ?>

 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>Edit</title>
   </head>
   <body>
     <form class="add" action="resigte.php" method="post">
       <label for="pName">First Name : </label><input type="text" name="fName" value="<?=$fName?>">
       <br>
       <label for="pAddress">Last Name : </label><input type="text" name="lName" value="<?=$lName?>">
       <br>
       <label for="pPhone">Sin Number : </label><input type="text" name="sinNum" value="<?=$sinNum?>">
       <br>
       <label for="pEmail">Birthday : </label><input type="text" name="birthDay" value="<?=$birthDay?>">
       <br>
       <input type="submit" name="btnSubmit" value="Update">
     </form>
   </body>
 </html>
