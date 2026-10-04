<?php
// Shared database connection. Adjust the credentials for your machine.

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

try {
    $connection = mysqli_connect("localhost", "root", "", "testdb");
} catch (mysqli_sql_exception $e) {
    die("Connection failed: " . $e->getMessage());
}
