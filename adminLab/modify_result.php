<?php
$fName = $_POST['firstName'];
$lName = $_POST['lastName'];
$sinNum = $_POST['sin'];
$birthDay = $_POST['birthDay'];

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
//echo "Connected successfully";

$sql = "UPDATE user SET firstName= '". $fName . "', lastName = '". $lName . "',sin= '" . $sinNum . "', birthDay ='"  . $birthDay . "'";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully!
    <br><button type=\"button\" name=\"button\" onclick=\"location.href='list.php'\">Go to Home</button>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
 ?>
