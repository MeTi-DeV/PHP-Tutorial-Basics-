<?php
$serverName = "localhost";
$userName = "root";
$password = "";
$dbName = 'dbtest';
$connection = mysqli_connect($serverName, $userName, $password, $dbName);
if (!$connection) {
    die('faild' . mysqli_connect_error());
}
// for insert multiple data has two ways
// first:
$sql = "INSERT INTO `users`(id,username,password) VALUES(2,'Ahmad','123456');";
$sql .= "INSERT INTO `users`(id,username,password) VALUES(3,'Mohsen','123456');";
$sql .= "INSERT INTO `users`(id,username,password) VALUES(4,'Nima','123456');";
if (mysqli_multi_query($connection, $sql)) {
    echo 'success';
} else {
    echo 'faild' . mysqli_error($connection);
}
// second:
// $sqls=["INSERT INTO `users`(id,username,password) VALUES(5,'Sara','123456');", "INSERT INTO `users`(id,username,password) VALUES(6,'Mehrdad','123456');",] ;
// foreach ($sqls as $sql ) {if (mysqli_query($connection, $sql)) {
//     echo 'success';
// } else {
//     echo 'faild' . mysqli_error($connection);
// }
// 
// }
