<?php

// Constants in PHP
// Constants should be defined only in uppercase
define("PI", 3.14159265359);    // Value of constant cannot be changed, defined at runtime
const STATUS = "Paid";          // Defined at compile time
// echo PI;

// To check if a constant is defined 
// echo defined('PI'); // 1, because it is defined above or else nothing
// echo defined('PIS'); // blank, not defined

if (true) {
    // const FOO = "bar";      // Error, not possible
    define("MSG", "Hello");  // Possible with define function
}

// Dynamic constant
$paid = "PAID";
define("STATUS_" . $paid, $paid);
echo STATUS_PAID;   // Not an error, works fine as STATUS_PAID = PAID

// MAGIC CONSTANTS
/**
 * There are nine magical constants that change depending on where they are used. For example, the value of __LINE__ depends on the line that it's used on in your script. All these "magical" constants are resolved at compile time, unlike regular constants, which are resolved at runtime.
 */

echo __LINE__;              // The current line number of the file.
echo __FILE__;              // The full path and filename of the file with symlinks resolved. If used inside an include, the name of the included file is returned.
echo __DIR__;               // The directory of the file. If used inside an include, the directory of the included file is returned. This is equivalent to dirname(__FILE__). This directory name does not have a trailing slash unless it is the root directory.
echo __FUNCTION__;          // The function name, or {closure} for anonymous functions.
echo __CLASS__;             // The class name. The class name includes the namespace it was declared in (e.g. Foo\Bar). When used in a trait method, __CLASS__ is the name of the class the trait is used in.
echo __TRAIT__;             //  The trait name. The trait name includes the namespace it was declared in (e.g. Foo\Bar).
echo __METHOD__;            // The class method name.
echo __NAMESPACE__;         // The name of the current namespace.
echo ClassName::class;      // The fully qualified class name.

// Variable variables
/**
 * Sometimes it is convenient to be able to have variable variable names. That is, a variable name which can be set and used dynamically. A normal variable is set with a statement such as:
 */
$a = 'hello';
$$a = 'world';
echo $hello;
