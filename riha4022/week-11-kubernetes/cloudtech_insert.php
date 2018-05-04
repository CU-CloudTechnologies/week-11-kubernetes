<?php
$connection = new MongoDB\Driver\Manager('mongodb://mongodb');

#$stats = new MongoDB\Driver\Command(["dbstats" => 1]);
#$res = $connection->executeCommand("local",$stats);
#$stats = current($res->toArray());
#print_r($stats);

$bulk = new MongoDB\Driver\BulkWrite();
$bulk->update(['_id' => 1], [ '$set' =>  ['x' => 'hello from db container']]);

$result = $connection->executeBulkWrite("lab2.collection", $bulk);
print_r("1 record inserted in the DB");
?>

