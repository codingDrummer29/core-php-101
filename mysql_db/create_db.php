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
    echo "Connected successfully";

// create database
// mysqli oop
$sql = "CREATE DATABASE myDB";
if ($conn->query($sql) === TRUE) {
  echo "Database created successfully";
} else {
  echo "Error creating database: " . $conn->error;
}
// mysqli procedural
$sql = "CREATE DATABASE myDB";
if (mysqli_query($conn, $sql)) {
  echo "Database created successfully";
} else {
  echo "Error creating database: " . mysqli_error($conn);
}
// pdo
try {
    $conn = new PDO("mysql:host=$servername", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "CREATE DATABASE mydbpdo";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "Database created successfully<br>";
  } catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
  }
  
  $conn = null;


// close connection
    // mysqli oop
    $conn->close();
    // mysqli procedural
    mysqli_close($conn);
    // pdo
    $conn = null;
    echo "Connection closed";

?>