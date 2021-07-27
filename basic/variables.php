<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables in PHP</title>
</head>
<body>
    
    <?php 
    
        /**
         * A variable can have a short name (like x and y) or a more descriptive name (age, carname, total_volume).
         * RULES:: 
         * A variable starts with the $ sign, followed by the name of the variable
         * A variable name must start with a letter or the underscore character
         * A variable name cannot start with a number
         * A variable name can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )
         * Variable names are case-sensitive ($age and $AGE are two different variables)
         */

        $txt = "My age is 23";

        echo $txt;
        echo $TXT;

        /**
         * My age is 23
         * Warning: Undefined variable $TXT in F:\Core PHP\basic\variables.php on line 26
         */

    ?>

</body>
</html>