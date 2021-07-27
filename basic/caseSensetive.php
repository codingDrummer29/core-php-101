<!DOCTYPE html>
<html lang="en">
<head>
    <title>PHP Basic</title>
</head>
<body>
    
    <?php

        $color = "red";

        /**
         * In PHP, keywords (e.g. if, else, while, echo, etc.), 
         * classes, functions, and user-defined functions 
         * are not case-sensitive.
         */

        echo "My favorite color is : ". $color ."<br />";
        ECHO "My favorite color is : ". $color ."<br />";
        EcHo "My favorite color is : ". $color ."<br />";
        // basic functions like echo if else while are not case sensetive

        /**
         * My favorite color is : red
         * My favorite color is : red
         * My favorite color is : red
         */
        
        echo "My favorite color is : ". $COLOR ."<br />";
        ECHO "My favorite color is : ". $CoLoR ."<br />";
        EcHo "My favorite color is : ". $color ."<br />";
        // variable names are cse sensetive

        /**
         * ERRORS: 
         * Warning: Undefined variable $COLOR in F:\Core PHP\basic\caseSensetive.php on line 16
         * My favorite color is :
         * Warning: Undefined variable $CoLoR in F:\Core PHP\basic\caseSensetive.php on line 17
         * My favorite color is :
         * My favorite color is : red
         */

    ?>

</body>
</html>