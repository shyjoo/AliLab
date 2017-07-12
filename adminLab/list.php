
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "id1644451_alidb";
$usercnt = 0;
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM user";
$result = $conn->query($sql);

?>



<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>People List</title>
  </head>
  <body>
    <button type="button" name="button" onclick="location.href='add.php'">Add</button>
<br>

    <?php
    if ($result->num_rows > 0) {
      echo "<table>
          <tr>
            <th>NO</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Sin Number</th>
            <th>Birthday</th>
            <th>Action</th>
          </tr>";
        // output data of each row
        while($row = $result->fetch_assoc()) {
          $usercnt += 1;
            echo "<tr><td>" . $usercnt . "</td><td>" . $row["firstName"]. "</td><td>"
            . $row["lastName"]. "</td><td>" . $row["sin"]. "</td><td>" . $row["birthDay"]. "</td><td><button type=\"button\" name=\"btnEdit\" onclick=\"location.href='modify.php?id=". $row["id"] . " '\">Edit</button><button type=\"button\" name=\"btndel\" onclick=\"location.href='delete.php?id=". $row["id"] . " '\">Delete</button></td></tr>" ;
        }
        echo "</table>";
    } else {
        echo "0 results";
    }

    $conn->close();
    ?>
  </body>
</html>

<a href="adminMain.php">Main</a><br /><br />
</body>
</html>
