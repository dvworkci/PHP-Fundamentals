<?php

// FLOATS in php
$sampleFloatNumber = 12.234;

// FLOAT MAX
echo PHP_FLOAT_MAX;
echo PHP_FLOAT_MIN;

// floor() rounds a number down
$floatNum = floor((0.1 + 0.7) * 10);    // (0.1 + 0.7) * 10 = 7999999999991118
echo $floatNum;     // 7

// ceil() rounds a number up
$newFloatNum = ceil($floatNum);
echo $newFloatNum;  // 8

// NAN	NAN (as a float)	Not A Number
echo NAN;

//INF	INF (as a float)	The infinite
echo INF;
echo PHP_FLOAT_MAX * 2; // INF
