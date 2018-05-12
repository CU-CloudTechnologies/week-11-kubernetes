<?php
$servername = "192.168.99.100:3306";
$username = "shikha";
$password = "secret";
$dbname = "mydb";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM mydb.table1";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo $row['col1'];
    }
} else {
    echo "0 results";
}
$conn->close();
?>
