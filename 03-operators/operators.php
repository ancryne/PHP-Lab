<?php
// Day 03 - Operators and conditional statements
//
// Arithmetic:  +  -  *  /  %  **
// Assignment:  =  +=  -=  .=
// Comparison:  ==  ===  !=  !==  <  >  <=  >=  <=>
// Logical:     &&  ||  !  and  or  xor
// Special:     ?:  (ternary)   ??  (null coalescing)

$a = 5;
$b = 10;

// Arithmetic
echo "a + b  = ", $a + $b, "<br>";
echo "a ** 2 = ", $a ** 2, "<br>";
echo "b % 3  = ", $b % 3, "<br>";

// Comparison
var_dump($a == "5");   // true  (loose: value only)
echo "<br>";
var_dump($a === "5");  // false (strict: value AND type)
echo "<br>";
var_dump($a <=> $b);   // -1 (a < b), 0 (equal), 1 (a > b)
echo "<br>";

// if / elseif / else
if ($a > $b) {
    echo "a is bigger<br>";
} elseif ($a === $b) {
    echo "a and b are equal<br>";
} else {
    echo "b is bigger<br>";
}

// Ternary and null coalescing
$status = ($a < $b) ? "a is smaller" : "a is not smaller";
echo $status, "<br>";

$username = $_GET['user'] ?? "Guest"; // fallback when not set
echo "Hello, ", htmlspecialchars($username), "<br>";
