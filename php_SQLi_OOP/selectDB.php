<?php
$serverName = "localhost";
$userName = "root";
$password = "";
$dbName = "w3schools";
$connection = new mysqli($serverName, $userName, $password, $dbName);
if ($connection->connect_error) {
    die('error' . $connection->connect_error);
}

$sql = "SELECT * FROM `categories` ORDER BY `CategoryID`";

$result = $connection->query($sql);
if ($result->num_rows > 0) {
    while ($rows = $result->fetch_assoc()) {
        echo "id : " . $rows['CategoryID'] . " name : " . $rows['CategoryName'] . "description : " . $rows['Description'] . "<br>";
    }
}