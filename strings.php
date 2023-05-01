<?php

// Strings in PHP
$firstName = "John";
$lastName = "Doe";

// echo "$firstName $lastName";        // John Doe, can use variables inside double quotes only
// echo "{$firstName} {$lastName}";

// Access characters of a string using index
// echo $firstName[0]; // J
// echo $lastName[0];  // D

// Or, access from behind using negative numbers
// echo $firstName[-1];    // n
// echo $lastName[-1];     // e

// Here doc (can have variables)
$msg = <<<TEXT
    Dear John Doe

    You have successfully registered, please enter the following OTP to verify your email: 8327
    Don't forget to subscribe.

    Thank You
TEXT;
echo nl2br($msg);

// Now doc (cannot have variables)
