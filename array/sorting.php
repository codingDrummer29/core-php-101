<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sorting of Array</title>
</head>
<body>
    
    <?php

        // indexed arrays
        $cars = array("Volvo", "BMW", "Toyota");
        print_r($cars); echo "<br>"; // op Array ( [0] => Volvo [1] => BMW [2] => Toyota )
        sort($cars); // ascending order
        print_r($cars); echo "<br>"; // op Array ( [0] => BMW [1] => Toyota [2] => Volvo )
        echo "<br>";
        $cars = array("Volvo", "BMW", "Toyota");
        print_r($cars); echo "<br>"; // op Array ( [0] => Volvo [1] => BMW [2] => Toyota )
        rsort($cars); // descending order
        print_r($cars); echo "<br>"; // op Array ( [0] => Volvo [1] => Toyota [2] => BMW )

        echo "<br><br>";

        $numbers = array(4, 6, 2, 22, 11);
        print_r($numbers); echo "<br>"; // op Array ( [0] => 4 [1] => 6 [2] => 2 [3] => 22 [4] => 11 )
        sort($numbers);
        print_r($numbers); echo "<br>"; // op Array ( [0] => 2 [1] => 4 [2] => 6 [3] => 11 [4] => 22 )
        echo "<br>";
        $numbers = array(4, 6, 2, 22, 11);
        print_r($numbers); echo "<br>"; // op Array ( [0] => 4 [1] => 6 [2] => 2 [3] => 22 [4] => 11 )
        rsort($numbers);
        print_r($numbers); echo "<br>"; // op Array ( [0] => 22 [1] => 11 [2] => 6 [3] => 4 [4] => 2 )

        echo "<br><br>";

        // associative array
        $age = array("Peter"=>"35", "Ben"=>"32", "Joe"=>"43");
        print_r($age); echo "<br>"; // op Array ( [Peter] => 35 [Ben] => 32 [Joe] => 43 )
        // according to value
        asort($age); // by value ascending
        print_r($age); echo "<br>"; // op Array ( [Ben] => 32 [Peter] => 35 [Joe] => 43 )

        $age = array("Peter"=>"35", "Ben"=>"32", "Joe"=>"43");
        print_r($age); echo "<br>"; // op Array ( [Peter] => 35 [Ben] => 32 [Joe] => 43 )
        ksort($age); // by key ascending
        print_r($age); echo "<br>"; // op Array ( [Ben] => 32 [Peter] => 35 [Joe] => 43 )

        $age = array("Peter"=>"35", "Ben"=>"32", "Joe"=>"43");
        print_r($age); echo "<br>"; // op Array ( [Peter] => 35 [Ben] => 32 [Joe] => 43 )
        // according to value
        arsort($age); // by value descending
        print_r($age); echo "<br>"; // op Array ( [Joe] => 43 [Peter] => 35 [Ben] => 32 )

        $age = array("Peter"=>"35", "Ben"=>"32", "Joe"=>"43");
        print_r($age); echo "<br>"; // op Array ( [Peter] => 35 [Ben] => 32 [Joe] => 43 )
        krsort($age); // by key descending
        print_r($age); echo "<br>"; // op Array ( [Peter] => 35 [Joe] => 43 [Ben] => 32 )

    ?>

</body>
</html>