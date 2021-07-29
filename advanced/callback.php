<?php
    $strings = ["apple", "orange", "banana", "coconut"];
    $lengths = array_map( function($item) { return strlen($item); } , $strings);
    print_r($lengths);

    // a callback to PHP's array_map() function to calculate the length of every string in an array:
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Call-back Functions</title>
</head>
<body>
    
    <?php
        function exclaim($str) {
            return $str . "! ";
        }

        function ask($str) {
            return $str . "? ";
        }

        function printFormatted($str, $format) {
            // Calling the $format callback function
            echo $format($str);
        }

        // Pass "exclaim" and "ask" as callback functions to printFormatted()
        printFormatted("Hello world", "exclaim");
        printFormatted("Hello world", "ask");
    ?>

</body>
</html>