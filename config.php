<?php
// connect to mongodb
$m = new MongoClient();
echo "connection to database successfully";
// select a database
  $db = $m->mydb;

 echo "Database mydb selected";
?>  