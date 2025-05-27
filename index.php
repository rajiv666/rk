<?php
require 'db.php';

$stmt = $pdo->query("SELECT * FROM users");
$users = $stmt->fetchAll(PDO::FETCH_ASSOC);

<<<<<<< HEAD
echo "<h1>Users4</h1><ul>";
=======
echo "<h1>Users5</h1><ul>";
>>>>>>> refs/remotes/origin/main
foreach ($users as $user) {
    echo "<li>{$user['name']} ({$user['email']})</li>";
}
echo "</ul>";
?>

