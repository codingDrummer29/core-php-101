<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Indexed Array</title>
</head>
<body>
    
    <?php 

        $cars = array("Volvo", "BMW", "Toyota");
        echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
        echo "<br>";
        // I like Volvo, BMW and Toyota.

        // loop through all elements
        $arrlength = count($cars);
        for($x = 0; $x < $arrlength; $x++) {
        echo $cars[$x];
        echo "<br>";
        }
        /**
         * Volvo
         * BMW
         * Toyota
         */

    ?>

</body>
</html>