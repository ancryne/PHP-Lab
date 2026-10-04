<?php
// Day 07 - $_POST: data is sent in the request body (not visible in the URL)

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name  = htmlspecialchars($_POST['name']  ?? '');
    $email = htmlspecialchars($_POST['email'] ?? '');

    echo "Your name is $name <br>";
    echo "Your registered email is $email <br>";
} else {
    echo "Please submit the form first.";
}
