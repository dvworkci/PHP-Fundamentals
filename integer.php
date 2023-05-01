<?php

// Integer data type in php
// MAX SIZE
echo PHP_INT_MAX;
echo PHP_INT_MIN;

// Size
echo PHP_INT_SIZE;

// Base 10
$base10 = 27;
echo $base10;

// Base 16
$base16 = 0x2A;
echo $base16; // 42

// Base 8
$base8 = 055;
echo $base8;    // 45

// Binary
$bin = 0b11;
echo $bin;       // 3

// type changes to float if overflow
$over = PHP_INT_MAX + 1;
$convertedToInt = (int) $over;
var_dump($over);
var_dump($convertedToInt);

// Casting into integer from other data types
$boolFalseToInt = (int) false;  // 0
$boolTrueToInt = (int) true;    // 1
$floatToInt = (int) 5.98;       // 5
$stringToInt = (int) "5.7";     // 5
$stringToInt2 = (int) "80";      // 80
$stringToInt3 = (int) "12asdasd";    // 12
$stringToInt4 = (int) "test";       // 0
$nullToInt = (int) null;            // 0

// To check if a variable is int
var_dump(is_int($over));    // bool(false)

// We can also use underscores to represent numbers
$amount = 2_00_000;
$stringToInt5 = (int) "2_00_000";       // 2
