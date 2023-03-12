<?php
$serverName = "localhost";
$userName = "root";
$password = "";
$connection = new mysqli($serverName, $userName, $password);
if ($connection->connect_error) {
    die('error' . $connection->connect_error);
}

$sql = "CREATE DATABASE `mehdi`";
if ($connection->query($sql)) {
    echo 'ok';
} else {
    echo 'no' . $connection->error;
}
