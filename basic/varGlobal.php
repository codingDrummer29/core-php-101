<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Global Keyword</title>
</head>
<body>

    <?php
        // The global keyword is used to access a global variable from within a function.
        $x = 5;
        $y = 7;

        function test(){
            global $x, $y;

            $y = $x + $y;
        }

        test();

        echo $y ;

        // op 12

        echo "<br />" ;

        /**
         * PHP also stores all global variables in an array called $GLOBALS[index]. 
         * The index holds the name of the variable. This array is also accessible from within functions 
         * and can be used to update global variables directly.
         */

        function myTest(){
            $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'] + 10 ;
        }

        myTest();

        echo $y ;

        // op 27

    ?>

</body>
</html>