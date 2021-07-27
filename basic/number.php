<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Numbers</title>
</head>
<body>

    <?php

        #   https://www.w3schools.com/php/php_numbers.asp

        /**
         * PHP has the following predefined constants for integers:
         * PHP_INT_MAX - The largest integer supported
         * PHP_INT_MIN - The smallest integer supported
         * PHP_INT_SIZE -  The size of an integer in bytes
         * 
         * PHP has the following functions to check if the type of a variable is integer:
         * is_int() or, 
         * is_integer() - alias of is_int() or,
         * is_long() - alias of is_int()
         */

        // $x = 7894;
        $x = 78.94;
        var_dump(is_int($x)); // op bool(true) or, bool(false)

        /**
         * PHP has the following predefined constants for floats (from PHP 7.2):
         * PHP_FLOAT_MAX - The largest representable floating point number
         * PHP_FLOAT_MIN - The smallest representable positive floating point number
         * - PHP_FLOAT_MAX - The smallest representable negative floating point number
         * PHP_FLOAT_DIG - The number of decimal digits that can be rounded into a float and back without 
         *    precision loss
         * PHP_FLOAT_EPSILON - The smallest representable positive number x, so that x + 1.0 != 1.0
         * 
         * functions:
         * is_float() or,
         * is_double() - alias of is_float()
         */

        $y = 7894;
        // $y = 78.94;
        var_dump(is_float($y)); // op bool(false) or, bool(true) 

        /**
         * PHP Infinite number:
         * Functions:
         * is_finite() & is_infinite()
         * 
         * However, the PHP var_dump() function returns the data type and value
         */

        $i = 1.9e411;
        var_dump($i); // op float(INF)

        /**
         * NaN stands for Not a Number.
         * NaN is used for impossible mathematical operations.
         * PHP has the following functions to check if a value is not a number:
         * is_nan()
         * However, the PHP var_dump() function returns the data type and value
         */

        $nan = acos(8);
        var_dump($nan); // op float(NAN)

        /**
         * The is_numeric() function will return FALSE for numeric strings in hexadecimal 
         * form (e.g. 0xf4c3b00c), as they are no longer considered as numeric strings.
         */

        $s = 5985;
        echo $s; // op 5985
        var_dump(is_numeric($s)); // op bool(true)
        
        $s = "5985";
        echo $s; // op 5985
        var_dump(is_numeric($s)); // op bool(true)
        
        $s = "59.85" + 100;
        echo $s; // op 159.85
        var_dump(is_numeric($s)); // oop bool(true)
        
        $s = "Hello";
        echo $s; // Hello
        var_dump(is_numeric($s)); // op bool(false)

        /**
         * Sometimes you need to cast a numerical value into another data type.
         * The (int), (integer), or intval() function are often used to convert a value to an integer.
         */

        // Cast float to int
        $x = 23465.768;
        $int_cast = (int)$x;
        echo $int_cast; // op 23465

        echo "<br>";

        // Cast string to int
        $x = "23465.768";
        $int_cast = (int)$x;
        echo $int_cast; // op 23465

    ?>

</body>
</html>