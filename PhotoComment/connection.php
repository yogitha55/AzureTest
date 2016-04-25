<?php

/*define('DB_SERVER', 'eu-cdbr-azure-north-d.cloudapp.net');
define('DB_USERNAME', 'b99256e599d9fc');
define('DB_PASSWORD', '64c23a04');
define('DB_DATABASE', 'rgutest');
//$db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);*/

define('DB_SERVER', 'ap-cdbr-azure-east-c.cloudapp.net');
define('DB_USERNAME', 'be6310e7f09681');
define('DB_PASSWORD', '4f8a3fc1');
define('DB_DATABASE', 'yogitha_0917852');

//Create Connection
$db = new mysqli(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

//$db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// prepare and bind
$query = $mysqli_query($db, "INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
$query->bind_param("sss", $username, $email, $password);

// set parameters and execute
$username = "Hanu";
$email = "john@example.com";
$password = "hanu";
$query->execute();

$username = "Budugu";
$email = "budugu@gmail.com";
$password = "hello";
$query->execute();

$username = "Tata";
$email = "tata@example.com";
$password = "super";
$query->execute();

echo "New records created successfully";

$query->close();
$mysqli_query->close();
?>



