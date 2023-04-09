<?php
$serverName = 'localhost';
$username = 'root';
$password = '';
$dbName = 'test';
$connection = new mysqli($serverName, $username, $password, $dbName);
if ($connection->connect_error) {
    die('Error : ' . $connection->connect_error);
}
$sql = "INSERT INTO users(id,first_name,last_name,age,email,password)VALUES(?,?,?,?,?,?)";
$statement = $connection->prepare($sql);
$statement->bind_param('ississ', $id, $first_name, $last_name, $age, $email, $password);
$id = 10;
$first_name = 'Mehdi';
$last_name = 'Zarei';
$age = 23;
$email = 'mehdi_z@yahoo.com';
$password = '123434kkdmd';
$statement->execute();
?>