<?php
// CREATE - insert rows using a prepared statement (safe from SQL injection)
require __DIR__ . '/config.php';

$stmt = $connection->prepare("INSERT INTO users (name, email) VALUES (?, ?)");

for ($i = 0; $i < 5; $i++) {
    $userName  = "User$i";
    $userEmail = "useremail$i@gmail.com";
    $stmt->bind_param("ss", $userName, $userEmail);
    $stmt->execute();
    echo "New user added: $userName<br>";
}

$stmt->close();
mysqli_close($connection);
