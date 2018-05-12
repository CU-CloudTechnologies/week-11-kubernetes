<?php
echo 'Hello Kubernetes World!';

// Make db connection
$conn = new mysqli('localhost', 'admin', 'secret');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
else {
    $sql = 'SELECT name FROM classes'; 
    $result = $conn->query($sql); 
    while($row = $result->fetch_assoc()) { echo 'Class : ' . $row['name']}   
    $conn->close(); 
}
?>
