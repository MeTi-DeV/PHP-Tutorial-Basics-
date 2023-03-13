<?php
$serverName = "localhost";
$userName = "root";
$password = "";
$dbName = "mehdi";
$connection = new mysqli($serverName, $userName, $password, $dbName);
if ($connection->connect_error) {
    die('error' . $connection->connect_error);
}

$sql = "INSERT INTO `users`(`id`,`fname`)VALUES(1,'mehdi')";
if ($connection->query($sql)) {
    echo 'ok';
} else {
    echo 'no' . $connection->error;
}