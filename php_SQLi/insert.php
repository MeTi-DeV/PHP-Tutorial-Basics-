<?php
$serverName = "localhost";
$userName = "root";
$password = "";
$dbName = 'dbtest';
$connection = mysqli_connect($serverName, $userName, $password, $dbName);
if (!$connection) {
    die('faild' . mysqli_connect_error());
}
$sql = "INSERT INTO `users`(id,username,password) VALUES(1,'Mehdi','123456')";
if (mysqli_query($connection, $sql)) {
    echo 'success';
} else {
    echo 'faild' . mysqli_error($connection);
}
