<?php
$servername = "localhost";
$username = "<enter-username-of-your-environment>";
$password = "<enter-a-passe=word>";
$dbname = "<respective-dbname>";

// Create connection
    // mysqli oop
    $conn = new mysqli($servername, $username, $password, $dbname);
    // msqli procedural
    $conn = mysqli_connect($servername, $username, $password, $dbname);

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

// create table inside database
// mysqli oop
$sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('John', 'Doe', 'john@example.com')";

if ($conn->query($sql) === TRUE) {
    $last_id = $conn->insert_id;
    echo "New record created successfully Last inserted ID is: " . $last_id;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
// mysqli procedural
$sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('John', 'Doe', 'john@example.com')";
    
if (mysqli_query($conn, $sql)) {
    $last_id = mysqli_insert_id($conn);
    echo "New record created successfully Last inserted ID is: " . $last_id;
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
// pdo
try {
    // $conn = new PDO("mysql:host=$servername", $username, $password);
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // sql to insert data
    $sql = "INSERT INTO MyGuests (firstname, lastname, email)
    VALUES ('John', 'Doe', 'john@example.com')";    

    // use exec() because no results are returned
    $conn->exec($sql);
    $last_id = $conn->lastInsertId();
    echo "New record created successfully. Last inserted ID is : " . $last_id;
} catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}


// close connection
    // mysqli oop
    $conn->close();
    // mysqli procedural
    mysqli_close($conn);
    // pdo
    $conn = null;
    echo "Connection closed";

?>