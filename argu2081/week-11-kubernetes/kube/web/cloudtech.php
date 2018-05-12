<html>
<body>
<?php
$conn = new mysqli(db, 'root', 'test', 'myDb');
$sql = 'SELECT * FROM mytable';
$result = $conn->query($sql);
while($row = $result->fetch_assoc()) { echo $row['mycol'] ;}
$conn->close();
?>
</body>
</html>
