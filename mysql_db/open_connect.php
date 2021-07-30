<?php
$servername = "localhost";
$username = "<enter-username-of-your-environment>";
$password = "<enter-a-passe=word>";

// Create connection

// mysqli oop
$conn = new mysqli($servername, $username, $password);
// msqli procedural
$conn = mysqli_connect($servername, $username, $password);


// Check connection

// mysqli oop
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// mysqli procedural
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}


// pdo
// create a valid db first
try {
  $conn = new PDO("mysql:host=$servername;dbname=test", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}

echo "Connected successfully";



// close connection

// mysqli oop
$conn->close();

// mysqli procedural
mysqli_close($conn);

// pdo
$conn = null;

echo "Connection closed";

?>