<?php
$fName = $_POST['fName'];
$lName = $_POST['lName'];
$sinNum = $_POST['sinNum'];
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

$sql = "INSERT INTO user (firstName, lastName, sin, birthDay)
VALUES ('". $fName . "', '". $lName . "', '" . $sinNum . "', '" . $birthDay . "')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully!
    <br><button type=\"button\" name=\"button\" onclick=\"location.href='list.php'\">Go to Home</button>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
 ?>
