<?php

    // SOURCE: https://www.w3schools.com/php/php_exceptions.asp

    function divide($dividend, $divisor) {
        if($divisor == 0) {
            throw new Exception("Division by zero", 1);
        }
        return $dividend / $divisor;
    }

    try {
        echo divide(5, 0);
    } catch(Exception $ex) {
        $code = $ex->getCode();
        $message = $ex->getMessage();
        $file = $ex->getFile();
        $line = $ex->getLine();
        echo "Exception thrown in $file on line $line: [Code $code]
        $message";
    } finally {
        echo "<br />Process Complete";
    }
    // op 
    // Exception thrown in C:\desktop\php\exception.php on line 4: [Code 1] Division by zero
    // Process Complete
?>