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
    $sql = "DELETE FROM `users` WHERE id=1";
    $connection->exec($sql);
    echo 'Success';
} catch (PDOException $e) {
    echo 'Error :: ' . $e;
}
?>