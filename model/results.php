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
$sql = "CREATE TABLE results (
id INT(30) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
convert_s VARCHAR(30) NOT NULL, 
result VARCHAR(30) NOT NULL,


        
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
  echo "Table Result created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

$conn->close();
?>
