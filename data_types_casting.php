<?php

declare(strict_types=1);
// Data Types & Type Casting

# 4 Scalar types

# bool - true/false
$completed = true;

# int - 1,2,3,0,-3,-5, etc
$score = 75;

# float - 1.5,0.1,0.005 and so on
$price = 0.99;

# string
$name = "Dushyant";
$num = "23";

echo $completed;
echo $score;
echo $price;
echo $name;

// Get type of a variable
echo gettype($completed);       // boolean
echo gettype($score);           // integer
echo gettype($price);           // double
echo gettype($name);            // string

# 4 compound types
# array
$programming_languages = ["C++", "PHP", "JavaScript", "Python"];
# object
# callable
# iterable

# 2 Special types
# resource
# null

# Type hinting example
function sum(int $x, int $y)
{
    var_dump($x, $y);
    echo "<br>";
    return $x + $y;
}

// $sum = sum(2,"3");  // cannot give it as string when using strict types, if not strict types, then type coercion will happen by php
$sum = sum(34, 45);
echo $sum;

// Type casting
// Convert from one type to another

$number = (int)"45";
