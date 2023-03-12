<?php
$serverName = "localhost";
$userName = "root";
$password = "";
$dbName = 'dbtest';
$connection = mysqli_connect($serverName, $userName, $password, $dbName);
if (!$connection) {
    die('faild' . mysqli_connect_error());
}
$sql = "DELETE FROM `users`WHERE `id`=1";
if (mysqli_query($connection, $sql)) {
    echo 'success';
} else {
    echo 'faild' . mysqli_error($connection);
}