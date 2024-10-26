<?php
$host = 'mysql-8.2';
$db = 'lk';
$user = 'root';
$pass = '';

$dsn = "mysql:host=$host; dbname=$db; charset=utf8";

$opt = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false,
];

$pdo = new PDO($dsn, $user, $pass, $opt);

//try {
//    $pdo = new PDO($dsn, $user, $pass, $opt);
//    echo 'подключен';
//} catch (PDOException $e) {
//    echo "не подключен: " . $e->getMessage();
//}