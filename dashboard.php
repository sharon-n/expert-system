<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    // Redirect to login page if not logged in
    header('Location: login.php');
    exit;
}

// Display user information
echo "Welcome, " . $_SESSION['name'] . "!";
?>
