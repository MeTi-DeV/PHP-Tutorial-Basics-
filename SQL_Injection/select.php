<?php

$serverName = 'localhost';
$userName = 'root';
$password = '';
$dbName = 'test';

try {
    $coneection = new PDO("mysql:host=$serverName;dbname=$dbName", $userName, $password);
    $sql = "SELECT*FROM `users`WHERE `id`=" . $_GET['id'] . "AND `password`=" . $_GET['password'];
    $statement = $coneection->query($sql);
    $users = $statement->fetchAll();
    echo '<pre>';
    foreach ($users as $user) {
        var_dump($user);
    }
} catch (PDOException $e) {
    echo "Error  : " . $e;
}

?>