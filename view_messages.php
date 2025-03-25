<?php
// Open SQLite database
$db = new SQLite3('database.sqlite');

// Fetch all messages
$results = $db->query("SELECT * FROM contacts ORDER BY created_at DESC");

echo "<h2>Saved Messages</h2>";
echo "<table border='1' cellpadding='10'>";
echo "<tr><th>ID</th><th>Name</th><th>Email</th><th>Message</th><th>Timestamp</th></tr>";

while ($row = $results->fetchArray(SQLITE3_ASSOC)) {
    echo "<tr>";
    echo "<td>" . $row['id'] . "</td>";
    echo "<td>" . $row['name'] . "</td>";
    echo "<td>" . $row['email'] . "</td>";
    echo "<td>" . $row['message'] . "</td>";
    echo "<td>" . $row['created_at'] . "</td>";
    echo "</tr>";
}

echo "</table>";
?>
