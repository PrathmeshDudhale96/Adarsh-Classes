<?php
// Create or open SQLite database
try {
    $db = new SQLite3('database.sqlite');

    // Create the table if it doesn't exist
    $query = "CREATE TABLE IF NOT EXISTS contacts (
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        name TEXT NOT NULL,
        email TEXT NOT NULL,
        message TEXT NOT NULL,
        created_at DATETIME DEFAULT CURRENT_TIMESTAMP
    )";
    $db->exec($query);

    // Handle form submission
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Validate inputs
        $name = trim($_POST["name"]);
        $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
        $message = trim($_POST["message"]);

        // Perform basic validation
        $errors = [];
        if (empty($name)) {
            $errors[] = "Name is required";
        }
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors[] = "Invalid email format";
        }
        if (empty($message)) {
            $errors[] = "Message is required";
        }

        if (empty($errors)) {
            // Prepare and execute the insert statement
            $stmt = $db->prepare("INSERT INTO contacts (name, email, message) VALUES (:name, :email, :message)");
            $stmt->bindValue(':name', htmlspecialchars($name), SQLITE3_TEXT);
            $stmt->bindValue(':email', htmlspecialchars($email), SQLITE3_TEXT);
            $stmt->bindValue(':message', htmlspecialchars($message), SQLITE3_TEXT);

            try {
                if ($stmt->execute()) {
                    // Success - redirect with success message
                    header("Location: contact.php?status=success");
                    exit();
                } else {
                    // Database error
                    header("Location: contact.php?status=error&message=Database%20error");
                    exit();
                }
            } catch (Exception $e) {
                header("Location: contact.php?status=error&message=Submission%20failed");
                exit();
            }
        } else {
            // Validation errors
            $errorString = implode(', ', $errors);
            header("Location: contact.php?status=error&message=" . urlencode($errorString));
            exit();
        }
    }
} catch (Exception $e) {
    // Handle database connection error
    header("Location: contact.php?status=error&message=Database%20connection%20failed");
    exit();
}
?>