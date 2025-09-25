<?php
$db_host = 'localhost';
$db_name = 'osr_ev';
$db_user = 'db_user';
$db_pass = 'db_pass';

try {
    $pdo = new PDO("mysql:host=$db_host;dbname=$db_name;charset=utf8mb4", $db_user, $db_pass, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);
} catch (Exception $e) {
    die("Database connection failed: " . $e->getMessage());
}
?>