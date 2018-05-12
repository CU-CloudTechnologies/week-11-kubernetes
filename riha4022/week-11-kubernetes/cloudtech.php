<?php
$connection = new MongoDB\Driver\Manager('mongodb://mongodb');
$filter = ['_id' => 1];
$query = new MongoDB\Driver\Query($filter);
$rows = $connection->executeQuery("lab2.collection", $query);

$result = current($rows->toArray());
if (!empty($result)){
echo $result->x, PHP_EOL;
} else {
echo "No match found\n";
}
#foreach($rows as $r){
#print_r($r);
#}
?>

