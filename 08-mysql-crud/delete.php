<?php
// DELETE - remove a user by id
require __DIR__ . '/config.php';

$id = 3;

$stmt = $connection->prepare("DELETE FROM users WHERE id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();

echo $stmt->affected_rows > 0
    ? "Record deleted successfully!!"
    : "No record found with that id.";

$stmt->close();
mysqli_close($connection);
