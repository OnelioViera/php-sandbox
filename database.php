<?php

// Database Creds
$host = "localhost";
$port = "3306";
$dbname = "blog";
$username = "oney";
$password = "Daniel#2024";

$dsn = "mysql:host={$host};port={$port};dbname={$dbname};charset=utf8";

try {
    // Create a new PDO instance
    $pdo = new PDO($dsn, $username, $password);

    // Set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Fetch as Assoc Array
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

} catch (PDOException $e) {
    // If connection fails, show the error message
    echo "Connection Failed: " . $e->getMessage();
}