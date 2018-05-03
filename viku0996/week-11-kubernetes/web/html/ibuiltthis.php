<?php
echo 'Webserver in Container <br> ----------------------------------------<br>';
$conn = new mysqli('mysql', 'master', 'mastersql', 'mydb');
$sql = 'SELECT * FROM teams'; 
$result = $conn->query($sql); 
while($row = $result->fetch_assoc()) { echo 'Team : ' . $row['name'].'<br>'.'----------------------------------------<br>';} 
$conn->close(); 
?>

