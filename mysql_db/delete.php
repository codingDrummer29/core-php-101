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
// pro
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// sql to delete a record
$sql = "DELETE FROM MyGuests WHERE id=3";

// result
// oop
if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $conn->error;
}
// pro
if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}

// disconnect
// oop
$conn->close();
// pro
mysqli_close($conn);
?>