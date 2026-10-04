<?php
// Day 07 - $_GET: data arrives in the URL (?username=...&userage=...)

if (isset($_GET['username'], $_GET['userage'])) {
    $name = $_GET['username'];
    $age  = $_GET['userage'];

    // htmlspecialchars() prevents XSS
    echo "Hello, " . htmlspecialchars($name) . "!<br>";
    echo "You are " . htmlspecialchars($age) . " years old.";
} else {
    echo "Please fill out the form first.";
}
