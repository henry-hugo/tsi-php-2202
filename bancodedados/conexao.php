<?php
$dsn = 'mysql:dbname=database2; host=localhost;port=3310';
$user ='root';
$pass = 'MyKeyword';

$pdo = new PDO($dsn, $user, $pass);

var_dump($pdo);



global $pdo;
?>