<html>
<head>
	<title>Brent's Web Server</title>
</head>

<body>
<?php
	$conn = new mysqli('172-18-0-2.default.pod.cluster.local', 'root', 'password', 'clouddb');
	$sql = 'SELECT * FROM cloudtable';
	$result = $conn->query($sql);
	while($row = $result->fetch_assoc()) {
		echo $row['testcolumn'] ;
	}
	$conn->close();
?>
</body>
</html>

