<?php
// db.php
$dsn = "sqlite:" . __DIR__ . "/users.db";
try {
    $pdo = new PDO($dsn);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // Create the users table if it doesn't exist
    $pdo->exec("CREATE TABLE IF NOT EXISTS users (
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        username TEXT UNIQUE,
        password TEXT
    )");
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
?>
