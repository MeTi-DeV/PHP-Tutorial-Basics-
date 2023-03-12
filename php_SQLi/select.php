<?php
$serverName = "localhost";
$userName = "root";
$password = "";
$dbName = 'w3schools';
$connection = mysqli_connect($serverName, $userName, $password, $dbName);
if (!$connection) {
    die('faild' . mysqli_connect_error());
}
$sql = "SELECT*FROM `categories` ORDER BY `CategoryName`";
$result=mysqli_query($connection,$sql);
if (mysqli_num_rows($result)>0) {
 while ($rows=mysqli_fetch_assoc($result)) {
    echo"id : ".$rows['CategoryID']."name : ".$rows['CategoryName']."description : ".$rows['Description']."<br>";
 }
}else{
    echo 'nothing';
}
