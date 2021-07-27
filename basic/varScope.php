<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Variable Socpes</title>
</head>
<body>

    <?php

        $x = 5; // global scope

        function test(){
            $x = 10; // local scope

            echo " <p>Value of x inside local function : $x</p> ";
        }

        test();

        echo " <p>Value of x outside local function : $x</p> " ;

        /**
         * Value of x inside local function : 10
         * 
         * Value of x outside local function : 5
         */

    ?>

</body>
</html>