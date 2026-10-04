<?php
// READ - fetch and display all users
require __DIR__ . '/config.php';

$result = mysqli_query($connection, "SELECT * FROM users");

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "ID: " . $row["id"]
           . " | Name: " . htmlspecialchars($row["name"])
           . " | Email: " . htmlspecialchars($row["email"]) . "<br>";
    }
} else {
    echo "DB is empty!!";
}

mysqli_close($connection);
