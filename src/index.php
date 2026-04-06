<?php
$host = getenv('DB_HOST');
$db   = getenv('DB_NAME');
$user = getenv('DB_USER');
$pass = getenv('DB_PASS');

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    echo "Connected to MySQL successfully!";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}