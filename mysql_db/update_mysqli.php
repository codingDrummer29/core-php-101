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

$sql = "UPDATE MyGuests SET lastname='Doe' WHERE id=2";

// result
// oop
if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}
// pro
if (mysqli_query($conn, $sql)) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . mysqli_error($conn);
}

// disconnect
// oop
$conn->close();
// pro
mysqli_close($conn);
?>