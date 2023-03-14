<?php
$serverName = 'localhost';
$username = 'root';
$password = '';
$dbName = 'test';
$options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
$connection = new PDO("mysql:host=$serverName;dbname=$dbName", $username, $password, $options);
// $sql = "INSERT INTO `users`(id,first_name,last_name,age,email,password)VALUES(:id,:first_name,:last_name,:age,:email,:password)";
$sql = "INSERT INTO `users`(id,first_name,last_name,age,email,password)VALUES(?,?,?,?,?,?)";
$statement = $connection->prepare($sql);
// $statement->bindParam(':id', $id);
// $statement->bindParam(':first_name', $first_name);
// $statement->bindParam(':last_name', $last_name);
// $statement->bindParam(':age', $age);
// $statement->bindParam(':email', $email);
// $statement->bindParam(':password', $password);
// $id = 12;
// $first_name = 'Nima';
// $last_name = 'Ahmadi';
// $age = 26;
// $email = 'na@yahoo.com';
// $password = 'df3erder454t';
$statement->execute([11, 'Sara', 'Rezaei', '25', 'sara_rz@yahoo.com', 'rew54f545gfg5']);
?>