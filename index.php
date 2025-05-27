<?php
require 'db.php';

$stmt = $pdo->query("SELECT * FROM users");
$users = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo "<h1>Users</h1><ul>";
foreach ($users as $user) {
    echo "<li>{$user['name']} ({$user['email']})</li>";
}
echo "</ul>";
?>

