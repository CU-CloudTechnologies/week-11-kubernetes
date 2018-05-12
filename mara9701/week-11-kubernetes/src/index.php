<?php
$servername = "172.17.0.2";
$username = "root";
$password = "password";
$dbname = "mydb";
$port = 3306; 
$conn = mysqli_connect($servername, $username, $password, $dbname, $port);
$sql = "SELECT id, firstname, lastname FROM MyGuests";
$result = $conn->query($sql);
if ($result->num_rows > 0) 
{ 
	while($row = $result->fetch_assoc()) 
	{
	echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
	}
}
else
{
	echo "0 results";
}
$conn->close();
?>