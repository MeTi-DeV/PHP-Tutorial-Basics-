<?php
try {
    $serverName = 'localhost';
    $userName = 'root';
    $password = '';
    $dbName = 'testPDO';
    // $options = array(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // $connection = new PDO("mysql:host=$serverName", $userName, $password, $options);
    $connection = new PDO("mysql:host=$serverName;dbname=$dbName", $userName, $password);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "CREATE TABLE `users`(
        id int,
        fName varchar(255)
    )";
    $connection->exec($sql);
    echo 'Success';
} catch (PDOException $e) {
    echo 'Error :: ' . $e;
}
?>