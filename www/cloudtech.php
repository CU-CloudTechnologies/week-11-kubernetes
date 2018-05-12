<html>
 <head>
  <title>Hello...</title>

  <meta charset="utf-8"> 


</head>
<body>
    <div class="container">
    <?php echo "<h1>Hi! hey from docker - kubernetes</h1>"; ?>

    <?php
    $vm = "172.20.74.204";
    $port=3306;
    $conn = mysqli_connect($vm, 'root', 'secret', "cloudDb",$port);
    $query = 'SELECT * From cloud';
    $result = mysqli_query($conn, $query);
    while($value = $result->fetch_array(MYSQLI_ASSOC)){
        foreach($value as $element){
            echo '<td>' . $element . '</td>';
        }
    }
    $result->close();
    mysqli_close($conn);
    ?>
    </div>
</body>
</html>
