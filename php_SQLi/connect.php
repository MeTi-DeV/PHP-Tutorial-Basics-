<?php
$serverName = "localhost";
$userName = "root";
$password = "";
$connection = mysqli_connect($serverName, $userName, $password);
if (!$connection) {
    die('faild' . mysqli_connect_error());
}

