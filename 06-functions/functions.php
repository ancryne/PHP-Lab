<?php
// Day 06 - Functions: parameters, defaults, type hints, return types

function greet(string $name = "Guest"): void
{
    echo "Hello, $name <br>";
}

function square(int $number): int
{
    return $number ** 2;
}

function calculator(float $num1, float $num2, string $op): float|string
{
    return match ($op) {
        "+"     => $num1 + $num2,
        "-"     => $num1 - $num2,
        "*"     => $num1 * $num2,
        "/"     => $num2 != 0 ? $num1 / $num2 : "Error: division by zero",
        default => "Error: unknown operator",
    };
}

greet();             // Hello, Guest
greet("Allysort");   // Hello, Allysort

echo square(23), "<br>";             // 529
echo calculator(23, 2, "+"), "<br>"; // 25
echo calculator(23, 2, "-"), "<br>"; // 21
echo calculator(23, 0, "/"), "<br>"; // Error: division by zero
