<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Constants</title>
</head>
<body>

<?php 

    /**
     * define(name, value, case-insensitive)
     * name: Specifies the name of the constant
     * value: Specifies the value of the constant
     * case-insensitive: Specifies whether the constant name should be case-insensitive. Default is false
     */

    // define("GREETING", "Welcome to W3Schools.com!", true);
    define("GREETING", "Welcome to W3Schools.com!");
    // echo greeting;
    /**
     * op
     * Warning: define(): Argument #3 ($case_insensitive) is ignored since
     * declaration of case-insensitive constants is no longer supported 
     * 
     * Fatal error: Uncaught Error: Undefined constant "greeting"
     * 
     * or,
     * Welcome to W3Schools.com!
     */

    /**
     * In PHP7, you can create an Array constant using the define() function.
     */

    define("cars", [
        "Alfa Romeo",
        "BMW",
        "Toyota"
    ]);
    // echo cars[0]; // Alfa Romeo

    // constants are global
    
    // define("GREETING", "Welcome to W3Schools.com!");

    function myTest() {
        echo GREETING;
    }
    
    myTest(); // op Welcome to W3Schools.com!

?>

</body>
</html>