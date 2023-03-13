<?php
try {
    $serverName = 'localhost';
    $userName = 'root';
    $password = '';
    $dbName = 'w3schools';
    $options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ);
    $connection = new PDO("mysql:host=$serverName;dbname=$dbName", $userName, $password, $options);
    // $connection = new PDO("mysql:host=$serverName;dbname=$dbName", $userName, $password);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "SELECT * FROM `categories`";
    // use query() for SELECT 
    $statement = $connection->query($sql);
    $categories = $statement->fetchAll();
    foreach ($categories as $category) {
        echo '<pre>';
        // return data as objects
        echo $category->CategoryID . ' ' . $category->CategoryName;
    }
    echo 'Success';
} catch (PDOException $e) {
    echo 'Error :: ' . $e;
}
?>