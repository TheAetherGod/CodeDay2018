<?php

$host = "localhost";
$user = "root";
$dbname = "codeday2018";

$dsn = "mysql:host=".$host."; dbname=".$dbname;

$pdo = new PDO($dsn,$user);

?>