<?php
class Database {
    private $conn;

    public function __construct() {
        try {
            // Create (or open) the SQLite database
            $this->conn = new SQLite3($_SERVER['DOCUMENT_ROOT'] . '/coaching_academy.sqlite');
            
            // Create users table if not exists
            $this->conn->exec('CREATE TABLE IF NOT EXISTS users (
                id INTEGER PRIMARY KEY AUTOINCREMENT,
                username TEXT UNIQUE NOT NULL,
                password TEXT NOT NULL,
                email TEXT,
                role TEXT DEFAULT "student"
            )');

            // Optional: Insert a default admin user if no users exist
            $checkAdmin = $this->conn->query('SELECT COUNT(*) as count FROM users')->fetchArray();
            if ($checkAdmin['count'] == 0) {
                $hashedPassword = password_hash('admin123', PASSWORD_DEFAULT);
                $insertAdmin = $this->conn->prepare('INSERT INTO users (username, password, role) VALUES (:username, :password, :role)');
                $insertAdmin->bindValue(':username', 'admin', SQLITE3_TEXT);
                $insertAdmin->bindValue(':password', $hashedPassword, SQLITE3_TEXT);
                $insertAdmin->bindValue(':role', 'admin', SQLITE3_TEXT);
                $insertAdmin->execute();
            }
        } catch(Exception $e) {
            die("Database connection failed: " . $e->getMessage());
        }
    }

    public function getConnection() {
        return $this->conn;
    }

    public function closeConnection() {
        if ($this->conn) {
            $this->conn->close();
        }
    }
}
?>