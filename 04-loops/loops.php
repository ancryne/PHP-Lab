<?php
// Day 04 - Loops: while, do-while, for, foreach, break, continue

// while
$number = 1;
while ($number <= 5) {
    echo $number, "<br>";
    $number++;
}

// do-while (runs at least once)
do {
    echo $number * 100, "<br>";
    $number++;
} while ($number <= 7);

// for
for ($i = 0; $i <= 10; $i++) {
    echo $i * 2, "<br>";
}

// foreach with continue
$fruits = ["Cherry", "Banana", "Orange"];
foreach ($fruits as $fruit) {
    if ($fruit === "Banana") {
        echo "This is the $fruit.<br>";
        continue; // skip to next iteration (use `break` to stop the loop)
    }
    echo $fruit, "<br>";
}

// Print only odd numbers
for ($i = 0; $i <= 10; $i++) {
    if ($i % 2 === 0) {
        continue;
    }
    echo $i, "<br>";
}
