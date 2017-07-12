<?php
$getId = $_GET['id'];

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

$sql = "DELETE FROM user WHERE id=". $getId;

if ($conn->query($sql) === TRUE) {
    echo "record deleted successfully!
    <br><button type=\"button\" name=\"button\" onclick=\"location.href='list.php'\">Go to Home</button>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
 ?>
