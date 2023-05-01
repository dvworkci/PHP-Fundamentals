<?php

// Boolean data type
$isComplete = true;
$strIsComplete = (string) $isComplete; // type str 1

// falsy values
// integers 0 -0 = false
// floats 0.0 -0.0 = false
// '' = false
// '0' = false
// [] = false
// null = false

if ($isComplete) {
    echo "if statement run";
} else {
    echo "else statement run";
}
