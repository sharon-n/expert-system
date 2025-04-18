<?php
$host = 'localhost';  // Database host
$dbname = 'startup_expert_system';  // Database name
$username = 'root';  // Your database username
$password = '';  // Your database password

try {
    // Create a PDO instance
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
?>
