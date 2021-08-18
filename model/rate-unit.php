<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "wtk";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// sql to create table
$sql = "CREATE TABLE rate_unit (
id INT(30) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
convert_s VARCHAR(30) NOT NULL, 
value1 VARCHAR(30) NOT NULL,
value2  VARCHAR(30) NOT NULL,

        
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
  echo "Table Rate_unit created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

$conn->close();
?>
