<?php
// Day 02 - Variables, constants, type juggling and casting

$name       = "Ancryne";
$age        = 23;
$pi         = 3.14159;
$isLoggedIn = true;

// Concatenation
echo "Hello ", $name, "! <br>";
echo "Hello " . $name . "! <br>";

// Interpolation (works only with double quotes, not single quotes)
echo "Hello, $name <br>";

// Constants
const MONGO_URI = "cx0skdui";

// Type juggling: PHP converts types automatically
$number = "23";
echo gettype($number), "<br>";   // string
$result = $age + $number;        // 46 (int)
echo gettype($result), "<br>";   // integer

// Type casting: (int), (float), (string), (bool)
$final = (float) $result;
echo gettype($final), "<br><br>";

// Mini example: product price
const STORE_NAME = "TechNet";
$product  = "Wireless Mouse";
$price    = (float) "1429.00"; // cast string -> float
$currency = "Rs.";

echo "Welcome to ", STORE_NAME, "!<br>";
echo "Today's special: $product for $currency $price only!!";
