<?php
// Database Connection
$DB_HOST = "localhost";
$DB_NAME = "dbuyxgc0wuzgsd";
$DB_USER = "ubzkcopvg2uj8";
$DB_PASS = "srze3szrim5c";
 
try {
    $pdo = new PDO("mysql:host=$DB_HOST;dbname=$DB_NAME;charset=utf8mb4", $DB_USER, $DB_PASS);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("DB Connection Failed: " . $e->getMessage());
}
?>
