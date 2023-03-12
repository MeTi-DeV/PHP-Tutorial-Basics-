<?php
$serverName = "localhost";
$userName = "root";
$password = "";
$connection = mysqli_connect($serverName, $userName, $password);
if (!$connection) {
    die('faild' . mysqli_connect_error());
}
$sql = "CREATE DATABASE `dbTest`";
if (mysqli_query($connection, $sql)) {
    echo 'success';
} else {
    echo 'faild' . mysqli_error($connection);
}
