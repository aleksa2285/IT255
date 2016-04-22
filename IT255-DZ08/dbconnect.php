<?php
 
define('MYSQL_USER', 'root');
define('MYSQL_PASSWORD', '');
define('MYSQL_HOST', 'localhost');
define('MYSQL_DATABASE', 'dz08');

$pdoOptions = array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_EMULATE_PREPARES => false
);
$pdo = new PDO(
    "mysql:host=" . MYSQL_HOST . ";dbname=" . MYSQL_DATABASE, //DSN
    MYSQL_USER, 
    MYSQL_PASSWORD,
    $pdoOptions 
);
?>