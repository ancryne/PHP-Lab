<?php
// UPDATE - change a user's name by id
require __DIR__ . '/config.php';

$id      = 2;
$newName = "Ryan";

$stmt = $connection->prepare("UPDATE users SET name = ? WHERE id = ?");
$stmt->bind_param("si", $newName, $id);
$stmt->execute();

echo $stmt->affected_rows > 0
    ? "Record updated successfully!!"
    : "No record changed.";

$stmt->close();
mysqli_close($connection);
