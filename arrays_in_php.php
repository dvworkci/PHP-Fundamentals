<?php

// Arrays in php : -
$programmingLanguages = ["PHP", "JavaScript", "Python"];

// accessing array elements
echo $programmingLanguages[0];  // PHP
echo $programmingLanguages[1];  // JavaScript
echo $programmingLanguages[2];  // Python
echo $programmingLanguages[3];  // ERROR:Undefined array key index

// Use isset() to check if a key in any array exist or not.

if (isset($programmingLanguages[3])) {
    echo "Key exists";
} else {
    echo "Key does not exist.";
}

// Mutate array using key
$programmingLanguages[1] = "C++";
echo $programmingLanguages[1];      // C++

// get length of an array
echo count($programmingLanguages);  // 3

// Add elements to an array
// This syntax pushes elements to the end of the array
$programmingLanguages[] = "Java";
$programmingLanguages[] = "Go";

// array_push() mutates the entire array
array_push($programmingLanguages, "Scala", "Ruby", "Swift");

// Associative arrays : -
$version = [
    "php" => "8.0",
    "python" => "3.7"
];
$newLang = "Objective-C";
$version[$newLang] = "5.8";

// Multi-dimensional arrays
$langDetails = [
    "php" => [
        "creator" => "Rasmus Lerdorf",
        "version" => "8.0"
    ],
    "python" => [
        "creator" => "Guido Van Rossum",
        "version" => "3.10"
    ]
];

// Same key will be overwritten in php
$arr = [1 => "foo", 2 => "bar", "2" => "baz"];    // [1 => foo, 2 => baz]
$arr2 = [true => "a", 1 => "b", "1" => "c", 1.8 => "d"];   // [1] => d

// array_pop() removes the last element of an array
array_pop($arr2);       // [1] => c

// array_shift() removes the first element of array and re-index that array except non-numeric keys
array_shift($arr);

// The array_key_exists() function checks an array for a specified key, and returns true if the key exists and false if the key does not exist.
$newArr = ["name" => "John", "age" => 26];
echo array_key_exists("name", $newArr);     // this function will tell if key exists in an array even it is equal to null
echo isset($newArr["age"]);                 // this function will tell if key exists only if it is not equal to null
