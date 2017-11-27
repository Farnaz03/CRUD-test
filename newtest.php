<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


//create Table
$sql = "CREATE TABLE dbtuts.users (
	user_id INT( 10 ) NOT NULL AUTO_INCREMENT PRIMARY KEY ,
	first_name VARCHAR( 25 ) NOT NULL ,
	last_name VARCHAR( 25 ) NOT NULL ,
	user_city VARCHAR( 45 ) NOT NULL
)";

if (mysqli_query($conn, $sql)) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . mysqli_error($conn);
}

mysqli_close($conn);
?>