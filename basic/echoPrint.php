<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Echo vs Print</title>
</head>
<body>

    <?php 

        /**
         * echo has no return value while print has a return value of 1 so it can be used in expressions. 
         * echo can take multiple parameters (although such usage is rare) while print can take one argument. 
         * echo is marginally faster than print.
         */
    
        // The echo statement can be used with or without parentheses: echo or echo().
        echo "Echo & Print : printed via echo";
        echo "This ", "string ", "was ", "made ", "with multiple parameters.";

        // The print statement can be used with or without parentheses: print or print().
        $txt1 = "Learn PHP";
        $x = 5;
        $y = 4;

        print "<h2>" . $txt1 . "</h2>";
        print $x + $y . " printed via print";
    
    ?>

</body>
</html>