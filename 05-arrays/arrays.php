<?php
// Day 05 - Arrays: indexed, associative and multidimensional

// Indexed array
$colors = ["Red", "Blue", "White", "Pink", "Black", "Cyan", "Green", "Yellow"];

for ($i = 0; $i < count($colors); $i++) {
    echo $colors[$i], "<br>";
}

foreach ($colors as $color) {
    echo "The name of the color is <strong>$color</strong>.<br>";
}

// Associative array
$person = [
    "name" => "Ancryne",
    "age"  => 23,
];

$car = [
    "name"        => "TESLA",
    "model"       => "M-Series",
    "numberPlate" => "T34JUI3435",
];

foreach ($car as $key => $value) {
    echo "The value of $key is <i>$value</i>.<br>";
}

// Multidimensional array
$students = [
    ["name" => "Ancryne", "age" => 23],
    ["name" => "Annie",   "age" => 20],
];
echo $students[0]["age"], "<br>"; // 23

// Useful array functions
array_push($colors, "Purple");        // add an item to the end
unset($colors[3]);                    // remove an item (keeps other keys)
$colors = array_values($colors);      // re-index after unset
$contains = in_array("Red", $colors); // true / false

echo "Is 'Red' in the array? ", $contains ? "Yes" : "No", "<br>";
echo "There are ", count($colors), " colors in the array<br>";
