<?php
$serverName = "localhost";
$userName = "root";
$password = "";
$dbName="w3schools";
$connection = new mysqli($serverName, $userName, $password,$dbName);
if ($connection->connect_error) {
    die('error' . $connection->connect_error);
}

$sql = "UPDATE `categories`SET `CategoryName`='Sea' WHERE `CategoryID`=8";
if ($connection->query($sql)) {
    echo 'ok';
} else {
    echo 'no' . $connection->error;
}