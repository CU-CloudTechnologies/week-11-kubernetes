<html>
<body>
<?php
	$conn = new mysqli('172-17-0-5.default.pod.cluster.local', 'root', 'secret', 'mydb');
	$sql = 'SELECT * FROM mytable';
	$result = $conn->query($sql);
	while($row = $result->fetch_assoc()) { echo $row['mycol'] ;}
	$conn->close();
?>
</body>
</html>
