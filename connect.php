<?php
// Database configuration
$host = 'localhost';
$dbname = 'csci375fa23';
$user = 'csci375fa23';
$pass = 'csci375fa23!';

try {
    // Create a PDO instance as db connection to your database
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $pass);

    // Set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // throw exceptions for every error
    $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

} catch(PDOException $e) {
    // Handle connection errors
    echo "Connection failed: " . $e->getMessage();
    // In a production environment, you might want to handle this without displaying the exact error
}
?>
