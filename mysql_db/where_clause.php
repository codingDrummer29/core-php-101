<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";

// Create connection
// oop
$conn = new mysqli($servername, $username, $password, $dbname);
// pro
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
// oop
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
// procedural
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT id, firstname, lastname FROM MyGuests WHERE lastname='Doe'";
// oop
$result = $conn->query($sql);
// procedural
$result = mysqli_query($conn, $sql);

// display
// oop
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
  }
} else {
  echo "0 results";
}
// procedural
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
      echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
    }
} else {
    echo "0 results";
}

// close connection
// oop
$conn->close();
// procedural
mysqli_close($conn);
?>