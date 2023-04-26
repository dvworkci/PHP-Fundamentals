<?php

// first line of code in php
echo "Hello, World";

// same thing with print function
print "Bye, World"; // This function has a return value of 1 and we can also call both functions using parenthesis
echo "I", "am", "Developer";  // Can't do this with print()
echo "Joe's Invoice";

// Variables
$name = "John Doe";
$_123_valid;
// $124_invalid;
// $this cannot re-assign it is used for objects in OOP programming
echo $name;

// Assign by value VS Assign by reference
$num1 = 12;
$num2 = $num1;      // This will not change as $num1 changes
$num3 = &$num1;     // This will change as $num1 changes

// Variables within text may appear only under double quotes
echo 'Hello $name';     // This will not work
echo "Hello $name";     // This will work
echo "Hello {$name}";     // This will also work, more readable

// Concatenation
$age = 27;
echo $name . " is " . $age . " years old.";     // John Doe is 27 years old.
