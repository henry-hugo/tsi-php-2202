<?php
$dsn = 'mysql:dbname=senac; host=localhost;port=3306';
$user ='bono';
$pass = '12345678';

$pdo = new PDO($dsn, $user, $pass);

var_dump($pdo);



global $pdo;
?>