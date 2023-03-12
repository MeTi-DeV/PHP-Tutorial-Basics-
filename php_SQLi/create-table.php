<?php
$serverName = "localhost";
$userName = "root";
$password = "";
$dbName = 'dbtest';
$connection = mysqli_connect($serverName, $userName, $password, $dbName);
if (!$connection) {
    die('faild' . mysqli_connect_error());
}
$sql = "CREATE TABLE `users`(`id` int NOT NULL,`username` VARCHAR(255),`password` VARCHAR(255))";
if (mysqli_query($connection, $sql)) {
    echo 'success';
} else {
    echo 'faild' . mysqli_error($connection);
}
