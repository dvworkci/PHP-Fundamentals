<?php

// null data type
$x = null;
echo $x;        // empty string

// to check if a variable in null or not
if (is_null($x)) {
    echo "x is null";
}

$y = 1243;
var_dump($y);
unset($y);
var_dump($y);   // null
